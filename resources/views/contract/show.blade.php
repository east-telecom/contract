@extends('layouts.app')

@php
    use App\Http\Controllers\ContractController;
    $id = Request::segment(2);
@endphp

@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract'.$contract->template_number.'.css?'.time()) }}">
@endsection



@section('content')

    <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>

    <section class="app-user-list">
        @php
            $u = \Auth::user();
            $u->load('section');
        @endphp


        <div class="js_data_all_pdf" data-template_number="{{ $contract->template_number }}">

            @php echo $contract->data; @endphp

        </div>


        <form action="#" class="file-uploaded-div mb-2 js_file_form_and_save_contract" enctype="multipart/form-data">
            <input type="file" id="inp-add-2" name="files[]" multiple>
        </form>


        @if($u->section->rule == 'JURIST')
            <div class="alert alert-primary text-center" style="width: 69%; margin: 10px auto; background: #d6d2f842;">
                @if(isset($array_comments))
                    <div class="div-chat js_chat_text m-auto mb-5">
                        <p class="text-info text-center mb-1">Комментарий</p>
                        @foreach($array_comments as $comment)
                            <p class="mb-0 border text-left p-1 pl-3">
                                <span class="text-primary">{{ $comment['jurist_or_employee'] }}</span>&nbsp;
                                <span class="text-bold">{{ $comment['name'] }}</span> :&nbsp;
                                <span class="">{{ $comment['text'] }}</span>
                            </p>
                        @endforeach
                    </div>
                @endif

                @if($contract->status == '1')
                    <div class="js_check_div" data-id="{{ $contract->id }}">
                        <textarea class="form-control mt-3 js_comment" name="comment" cols="40" rows="1" placeholder="Комментарий"></textarea>
                        <a href="#" class="btn btn-success mr-2 mt-3 js_accept_or_decline_btn" data-status="2"><i class="fas fa-check-double"></i> Подтвердить</a>
                        <a href="#" class="btn btn-danger ml-2 mt-3 js_accept_or_decline_btn" data-status="-1"><i class="fa-solid fa-xmark"></i> Отклонить</a>
                    </div>
                @endif

            </div>
        @endif

        @if(isset($array_comments) && $u->section->rule != 'JURIST')
            <div class="div-chat m-auto mb-5" style="width: 69%">
                <p class="text-info text-center mb-1">Комментарий</p>
                @foreach($array_comments as $comment)
                    <p class="mb-0 border border-bottom-dark p-1 pl-3">
                        <span class="text-primary">{{ $comment['jurist_or_employee'] }}</span>&nbsp;
                        <span class="text-bold">{{ $comment['name'] }}</span> :&nbsp;
                        <span>{{ $comment['text'] }}</span>
                    </p>
                @endforeach
            </div>
        @endif

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
        $('.fileinput-remove').addClass('d-none');
        $('.fileinput-remove-button').removeClass('btn-outline-secondary').addClass('btn-secondary');

        let upload_btn = $('.kv-file-upload');
        if(!upload_btn.hasClass('d-none')) {
            setInterval(function() {
                $('.kv-file-upload').addClass('d-none');
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

                check_div.addClass('d-none')
                let new_p = '<p class="mb-0 border text-left p-1 pl-3">\n'+
                                '<span class="text-primary">Юрист</span>&nbsp;\n'+
                                '<span class="text-bold">{{ $u->full_name }}</span> :&nbsp;\n'+
                                '<span>'+comment+'</span>\n'+
                        '</p>';
                $('.js_chat_text').append(new_p);

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

                            $('.js_comment').val('')
                            window.location.reload();
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
