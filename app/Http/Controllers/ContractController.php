<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helper;
use App\Models\Contract;
use App\Models\User;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\MailController;
use Yajra\DataTables\DataTables;
use File;
use ZipArchive;

use function Couchbase\defaultDecoder;

class ContractController extends Controller
{

    static private function contracts()
    {
        $user = Auth::user();
        $user->load('section');

        if ($user->section->rule == 'ROOT' || $user->section->rule == 'ADMIN_USER') {
            $permission = explode(';', $user->section->permission);

            $users = User::all();
            $u_ids = [];
            foreach ($users as $k => $u) {
                if (in_array($u->section_id, $permission)) {
                    $u_ids[$k] = $u->id;
                }
            }

            $contracts = Contract::whereIn('user_id', $u_ids)
                ->where('deleted_at', NUll)
                ->orderBy('created_at', 'DESC')
                ->get();
        }
        else if($user->section->rule == 'USER') {
            $contracts = Contract::where(['user_id' => $user->id, 'deleted_at' => NUll])
                ->orderBy('created_at', 'DESC')
                ->get();
        }
        else {
            // JURIST
            $contracts = Contract::where('deleted_at', NUll)
                ->orderBy('created_at', 'DESC')
                ->get();
        }
        $contracts->load('user', 'jurist');

        return $contracts;
    }


    public function index()
    {
        $contracts = self::contracts();

        return view('contract.index', compact('contracts'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::findOrFail($id);

        $files = json_decode($contract->files);

        return view('contract.show', compact('contract', 'files'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = Validator::make($request->all(), $this->validated());

        if ($error->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $error->getMessageBag()->toArray()
            ));
        }
        else {
            try {
                $files = [];
                if($request->hasfile('files'))  {

                    foreach($request->file('files') as $file) {
                        $file_name = time().rand(1, 100).'.'.$file->getClientOriginalExtension();
                        $file->move(public_path().'/file_uploaded/', $file_name);
                        $files[] = $file_name;
                    }
                }

                Contract::create([
                    'user_id' => Auth::user()->id,
                    'number'  => $request->number,
                    'title'   => $request->title,
                    'data'    => $request->data,
                    'status'  => 0,
                    'template_number' => $request->template_number,
                    'files'   => json_encode($files),
                ]);

                return response()->json(['status' => true, 'msg' => 'ok', 'files' => $files]);

            }
            catch (\Exception $exception) {
                return response()->json(['status' => false, 'errors' => $exception->getMessage()]);
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::findOrFail($id);

        return view('contract.edit', compact('contract'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $error = Validator::make($request->all(), $this->validated());

        if ($error->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $error->getMessageBag()->toArray()
            ));
        }
        else {
            try {
                $files = [];
                if($request->hasfile('files'))  {
                    foreach($request->file('files') as $file) {
                        $file_name = time().rand(1, 100).'.'.$file->getClientOriginalExtension();
                        $file->move(public_path().'/file_uploaded/', $file_name);
                        $files[] = $file_name;
                    }
                }

                $contract = Contract::findOrFail($id);

//                $f = explode(',', $request->hidden_files);

                if($request->hasfile('files')) {

                    foreach (json_decode($contract->files) as $file) {
                        if (File::exists(public_path("file_uploaded/" . $file)))
                        File::delete(public_path("file_uploaded/" . $file));
                    }
                }


                $contract->fill([
                    'number' => $request->number,
                    'data'   => $request->data,
                    'status' => 0,
                    'jurist_id' => null,
                    'files' => $files,
                ]);
                $contract->save();

                return response()->json(['status' => true, 'msg' => 'ok']);
            } catch (\Exception $exception) {
                return response()->json(['status' => false, 'errors' => $exception->getMessage()]);
            }
        }
    }

    public function validated()
    {
        return [
            'number'=> 'required',
            'title' => 'required',
            'data'  => 'required',
            'files.*' => 'required|mimes:png,jpg,jpeg,pdf'
        ];
    }


    public function update_status_and_send_jurists(Request $request)
    {
        try {
            $product = Contract::findOrFail($request->id);
            $contract_name = $product->title." ".$product->number;
            $employee_id = $product->user_id;
            $product->fill(['status' => 1]);
            $product->save();

            // get only jurists in users
            $jurists = User::select('email', 'status')->where('status', '1')->whereHas('section', function($query) {
                $query->where('rule', 'JURIST');
            })->get();

            $id = (int)$request->id;

            $employee = User::findOrFail($employee_id);

            $content_array = [
                'Договор'  => $contract_name,
                'Сотрудник' => $employee->full_name,
                'Эл. адрес' => $employee->email
                ];

            foreach($jurists as $j) {
                MailController::sendMail($j->email, $id, "Уведомление!", $content_array);
            }

            // Bo'lim boshlig'iga yuborish
            $department_head_email = $this->get_department_head_email($employee_id);
            MailController::sendMail($department_head_email, $id, "Уведомление!", $content_array);


            return response()->json(['status' => true, 'msg' => 'ok', 'contract_status' => 1]);
        }
        catch (\Exception $exception) {
            return response()->json(['status' => false, 'errors' => $exception->getMessage()]);
        }
    }


    public function update_status_and_send_employee(Request $request)
    {
        try {
            $jurist_id = Auth::user()->id;
            $contract = Contract::findOrFail($request->id);
            $contract_name = $contract->title." ".$contract->number;
            $contract->fill([
                'status'    => $request->status,
                'jurist_id' => $jurist_id,
                'comment'   => $request->comment
            ]);
            $contract->save();

            // send mail to employee
            $user = User::findorFail($contract->user_id);
            $user_email = $user->email;
            $id = (int)$request->id;
            $jurist = User::findOrFail($jurist_id);

            if ($request->status == 2)
                $status = 'Одобренный';
            else if($request->status == -1)
                $status = 'Не одобрено';

            $content_array = [
                'Договор'   => $contract_name,
                'Юрист'     => $jurist->full_name,
                'Эл. адрес' => $jurist->email,
                'Статус'    => $status,
                'Комментарий' => $request->comment,
            ];

            MailController::sendMail($user_email, $id, 'Документ проверен.', $content_array);

            // Bo'lim boshlig'iga yuborisah
            $content_array = [
                'Договор' => $contract_name,
                'Юрист'   => $jurist->full_name,
                'Юрист. Эл. адрес' => $jurist->email,
                'Статус'  => $status,
                'Комментарий юриста' => $request->comment,
                'Сотрудник' => $user->full_name,
                'Сотрудник. Эл. адрес' => $user_email,
            ];
            $department_head_email = $this->get_department_head_email($user->id);
            MailController::sendMail($department_head_email, $id, 'Документ проверен.', $content_array);


            return response()->json(['status' => true, 'msg' => 'ok', 'contract_status' => $request->status]);
        }
        catch (\Exception $exception) {
            return response()->json(['status' => false, 'errors' => $exception->getMessage()]);
        }
    }


    // начальник отдела -> Эл. адрес
    private function get_department_head_email($employee_id) {

        $section_id = User::findOrFail($employee_id)->section_id;

        $sections = Section::all();

        foreach($sections as $section) {
            if ($section->permission) {
                $permission_array = explode(';', $section->permission);

                if (in_array($section_id, $permission_array))
                    $s_id = $section->id;
            }
        }

        $user = User::where('section_id', $s_id)->first();
        return $user->email;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $c = Contract::findOrFail($id);
            $c->fill(['deleted_at' => date('Y-m-d H:i:s')]);
            $c->save();

            return response()->json(['status' => true, 'id' => $id]);
        }
        catch (\Exception $exception) {

            if ($exception->getCode() == 23000) {
                return response()->json(['status' => false, 'errors' => 'The data used cannot be deleted.']);
            }

            return response()->json([
                'status' => false,
                'errors' => $exception->getMessage()
            ]);
        }
    }


    public static function checkApproved($id) {
        try {
            $c = Contract::findOrfail($id);
            return $c->status;
        }
        catch(\Exception $exception) {
            return $exception->getMessage();
        }
    }


    public function files_download(Request $request) {

        try {
            chdir('file_uploaded');

            $file = Contract::findOrFail($request->id);

            $f_array = json_decode($file->files);

            if (!empty($f_array)) {

                $zip = new ZipArchive;

                if (file_exists('files'.$request->id.'.zip'))
                    unlink('files'.$request->id.'.zip');

                $fileName = 'files'.$request->id.'.zip';

                if ($zip->open($fileName, ZipArchive::CREATE) === TRUE) {
                    foreach (json_decode($file->files) as $f) {
                        $zip->addFile($f);
                    }
                    $zip->close();
                }

                return response()->download($fileName);
            }
            else {
                return response()->json(['status'=> false, 'file' => 'No file']);
            }

        }
        catch(\Exception $exception) {
            return $exception->getMessage();
        }

    }

}
