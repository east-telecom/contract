<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    // 0-send jurist; Yurisatga jo'natildi
    // -1-jurist no; Userga kirganda xabar chiqishi kerak
    // 1-jurist yes; Userga pdfni saqlash imkoni hosil bo'lishi kerak


    public function template1()
    {
        return view('templates.template1');
    }


    public function template2()
    {
        return view('templates.template2');
    }


    public function template3()
    {
        return view('templates.template3');
    }

    public function template4()
    {
        return view('templates.template4');
    }


    public function template5()
    {
        return view('templates.template5');
    }


    public function template6()
    {
        return view('templates.template6');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $error = Validator::make($request->all(), [
            'number'=> 'required',
            'title' => 'required',
            'data'  => 'required'
        ]);

        if ($error->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $error->getMessageBag()->toArray()
            ));
        }
        else {
            try {

                // send jurist 2

                Contract::create([
                    'user_id' => Auth::user()->id,
                    'number'  => $request->number,
                    'title'   => $request->title,
                    'data'    => $request->data,
                    'status'  => 0,
                ]);

                return response()->json(['status' => true, 'msg' => 'ok']);

            } catch (\Exception $exception) {
                return response()->json(['status' => false, 'errors' => $exception->getMessage()]);
            }
        }
    }





    public function sum_text(Request $request) {
        $num = $request->sum;

        $nul='ноль';
        $ten=array(
            array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
            array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
        );
        $a20 = array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
        $tens = array(2 => 'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
        $hundred = array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
        $unit = array( // Units
            array('тийин',      'тийин',    'тийин',	  1),
            array('сум',        'сумов',    'сумов',      0),
            array('тысяча',     'тысячи',   'тысяч',      1),
            array('миллион',    'миллиона', 'миллионов',  0),
            array('миллиард',   'милиарда', 'миллиардов', 0),
        );

        /** many number convert string **/

        list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
        $out = array();
        if (intval($rub) > 0) {
            foreach(str_split($rub,3) as $uk => $v) { // by 3 symbols
                if (!intval($v))
                    continue;
                $uk = sizeof($unit)-$uk-1; // unit key
                $gender = $unit[$uk][3];
                list($i1, $i2, $i3) = array_map('intval', str_split($v,1));
                // mega-logic
                $out[] = $hundred[$i1]; # 1xx-9xx

                if ($i2 > 1)
                    $out[] = $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
                else
                    $out[] = $i2 > 0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
                // units without rub & kop
                if ($uk > 1)
                    $out[] = $this->morph($v, $unit[$uk][0], $unit[$uk][1], $unit[$uk][2]);
            } //foreach
        }
        else $out[] = $nul;
        $out[] = $this->morph(intval($rub), $unit[1][0], $unit[1][1], $unit[1][2]); // rub
        $out[] = $kop.' '.$this->morph($kop, $unit[0][0], $unit[0][1], $unit[0][2]); // kop

        $result1 = trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));

        preg_match('!\d+!', $result1, $tiyn_number);

        $tiyn_text = $this->tiyn_text($nul, $ten, $a20, $tens, $hundred, $tiyn_number[0]);

        $many_text = str_replace($tiyn_number, $tiyn_text, $result1);

        return response()->json(['many_text' => $many_text]);
    }


    public function morph($n, $f1, $f2, $f5) {
        $n = abs(intval($n)) % 100;

        if ($n > 10 && $n < 20)
            return $f5;
        $n = $n % 10;

        if ($n > 1 && $n < 5)
            return $f2;

        if ($n == 1)
            return $f1;

        return $f5;
    }


    public function tiyn_text($nul, $ten, $a20, $tens, $hundred, $num) {

        $unit = array( // Units
            array('' ,      '',         '',	          1),
            array('',       '',         '',           0),
            array('тысяча', 'тысячи',   'тысяч',      1),
            array('миллион', 'миллиона','миллионов',  0),
            array('миллиард','милиарда','миллиардов', 0),
        );

        /** convert  **/

        list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
        $out = array();
        if (intval($rub) > 0) {

            foreach(str_split($rub,3) as $uk => $v) { // by 3 symbols
                if (!intval($v))
                    continue;
                $uk = sizeof($unit)-$uk-1; // unit key
                $gender = $unit[$uk][3];
                list($i1, $i2, $i3) = array_map('intval', str_split($v,1));
                // mega-logic
                $out[] = $hundred[$i1]; # 1xx-9xx
                if ($i2 > 1)
                    $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
                else
                    $out[] = $i2 > 0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9

                // units without rub & kop
                if ($uk > 1)
                    $out[] = $this->morph($v, $unit[$uk][0], $unit[$uk][1], $unit[$uk][2]);
            } //foreach
        }
        else
            $out[] = $nul;

        $out[] = $this->morph(intval($rub), $unit[1][0], $unit[1][1], $unit[1][2]); // rub

        return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
    }


    }
