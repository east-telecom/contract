@extends('layouts.app')

@section('style')
    @php
        use App\Http\Controllers\ContractController;
        $id = Request::segment(2);
    @endphp

@endsection

@section('content')

    <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>


    <section class="app-user-list">
        @php
            $u = \Auth::user();
            $u->load('section');
        @endphp
        @if($u->section->rule == 'JURIST' && $contract->status == '1')
            <div class="alert alert-primary text-center js_check_div" style="width: 794px; margin: 10px auto;" data-id="{{ $contract->id }}">
                <h3>Проверить документ !</h3>
                <a href="#" class="btn btn-success mr-2 js_accept_or_decline_btn" data-status="2"><i class="fas fa-check-double"></i> Принимать</a>
                <a href="#" class="btn btn-danger ml-2 js_accept_or_decline_btn" data-status="-1"><i class="fa-solid fa-xmark"></i> Отклонить</a>
                <label for="comment"></label>
                <textarea class="form-control mt-3 js_comment" id="comment" name="comment" cols="40" rows="2" placeholder="Комментарий"></textarea>
            </div>
        @endif


        <div class="js_data_all_pdf" data-template_number="{{ $contract->template_number }}">

            @php echo $contract->data; @endphp

        </div>


        <form action="#" class="file-uploaded-div mb-5 js_file_form_and_save_contract" enctype="multipart/form-data">
            <input type="file" id="inp-add-2" name="files[]" multiple>
        </form>

    </section>

@endsection


@section('script')

    <script>

        let files = '{{ $contract->files }}'.replaceAll('&quot;', '"');
        files = JSON.parse(files);

        let arrayFiles = [], option_files = [];
        files.forEach( (file, id) => {
            arrayFiles[id] = "https://contract.etc-network.uz/file_uploaded/"+file;
        });

        // file uploaded
        $('#inp-add-2').fileinput({
            uploadUrl: '#',
            allowedFileExtensions: ['jpg', 'jpeg', 'png', 'pdf'],
            initialPreviewAsData: true,
            initialPreview: arrayFiles,
        });


        $('.fileinput-upload-button').addClass('d-none');
        $('.fileinput-remove-button').removeClass('btn-outline-secondary').addClass('btn-secondary');

        let upload_btn = $('.kv-file-upload');
        if(!upload_btn.hasClass('d-none')) {
            setInterval(function() {
                $('.kv-file-upload').addClass('d-none');
                // $('.kv-file-rotate').addClass('d-none');
            }, 1000);
        }
        $('.btn-file .hidden-xs').addClass('ml-2').html('file upload');


        $(document).ready(function() {


            $(document).on('click', '.js_accept_or_decline_btn', function(e) {
                e.preventDefault();

                let check_div = $(this).closest('.js_check_div');
                let id = check_div.data('id');
                let status = $(this).data('status');
                let comment = $('.js_comment').val();
                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '{{ route('contract.update_status_and_send_employee') }}',
                    type: 'POST',
                    data: { '_token': token, 'id': id, 'status': status, 'comment': comment },
                    dataType: 'JSON',
                    success: (response) => {
                        console.log(response);
                        if (response.status) {
                            if (response.contract_status == '2')
                                $('.text_edit').css('color', 'black');

                            check_div.addClass('d-none')
                        }
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })
            });

        })

    </script>
@endsection
