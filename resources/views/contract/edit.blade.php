@extends('layouts.app')


@section('content')

    <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>

    <section class="app-user-list js_data_all {{ $contract->class }}">

        @php echo $contract->data; @endphp

    </section>


    @include('templates.form_file_and_contract_save')

@endsection


@section('script')
    <script>

        let files = '{{ $contract->files }}'.replaceAll('&quot;', '"');
        files = JSON.parse(files);

        let arrayFiles = [], hidden_files = [];
        files.forEach( (file, id) => {
            arrayFiles[id] = "https://contract.etc-network.uz/file_uploaded/"+file;
            // option_files[id] = { filename: file, downloadUrl: "https://contract.etc-network.uz/file_uploaded/"+file, key: id}
            hidden_files[id] = file;
        });

        $('.js_hidden_files').val(hidden_files);


        // file uploaded
        $('#inp-add-2').fileinput({
            uploadUrl: '#',
            allowedFileExtensions: ['jpg', 'jpeg', 'png', 'pdf'],
            initialPreviewAsData: true,
            initialPreview: arrayFiles,
            // initialPreviewConfig: [ option_files ],
        });


        $('.fileinput-upload-button').addClass('d-none');
        $('.fileinput-remove-button').removeClass('btn-outline-secondary').addClass('btn-secondary');

        let upload_btn = $('.kv-file-upload');
        if(!upload_btn.hasClass('d-none')) {
            setInterval(function() {
                $('.kv-file-upload').addClass('d-none');
                $('.kv-file-rotate').addClass('d-none');
            }, 1000);
        }
        $('.btn-file .hidden-xs').addClass('ml-2').html('file upload');



        $(document).on('submit', '.js_file_form_and_save_contract', function(e) {
            e.preventDefault();

            afer_save_add_d_none_template()

            let form    = $(this);
            let number  = $('.js_number').html();
            let title   = $('.js_title1').html();
            let data    = $('.js_data_all').html();

            form.find('.js_hidden_number').val(number);
            form.find('.js_hidden_title').val(title);
            form.find('.js_hidden_data').val(data);
            form.append('<input type="hidden" name="_method" value="PUT">');

            $.ajax({
                url: '{{ route('contract.update', [$contract->id]) }}',
                type: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                // cache: false,
                processData: false,
                success: (response) => {
                    // console.log('res: ', response);
                    window.location.href = window.location.protocol + "//" + window.location.host + "/contract/";
                },
                error: (response) => {
                    console.log('error: ', response)
                }
            })
        });
        


    </script>
@endsection
