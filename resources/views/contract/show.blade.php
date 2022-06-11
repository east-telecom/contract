@extends('layouts.app')

@section('style')
    @php
        use App\Http\Controllers\ContractController;
        $id = Request::segment(2);
    @endphp

    @if(Request::segment(3) == 'create-pdf' && (ContractController::checkApproved($id) == 1))
        <style>
            .js_data_all_pdf *{
                color: black !important;
            }
        </style>
    @endif
@endsection

@section('content')

    <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>

    <section class="app-user-list">
        @php
            $u = \Auth::user();
            $u->load('section');
        @endphp
        @if($u->section->rule == 'JURIST' && $contract->status == '0')
            <div class="alert alert-primary text-center js_check_div" style="width: 794px; margin: 10px auto;" data-id="{{ $contract->id }}">
                <h3>Check the document !</h3>
                <a href="#" class="btn btn-success mr-2 js_accept_or_decline_btn" data-status="1"><i class="fas fa-check-double"></i> Accept</a>
                <a href="#" class="btn btn-danger ml-2 js_accept_or_decline_btn" data-status="-1"><i class="fa-solid fa-xmark"></i> Decline</a>
            </div>
        @endif


        <div class="js_data_all_pdf">
            @php echo $contract->data; @endphp
        </div>

    </section>

@endsection


@section('script')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>--}}

    <script>

        $(document).ready(function() {

            $(document).on('click', '.js_accept_or_decline_btn', function(e) {
                e.preventDefault();

                let check_div = $(this).closest('.js_check_div')
                let id = check_div.data('id')
                let status = $(this).data('status')
                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '{{ route('contract.update_status') }}',
                    type: 'POST',
                    data: { '_token': token, 'id': id, 'status': status},
                    dataType: 'JSON',
                    success: (response) => {
                        if (response.status) {
                            check_div.addClass('d-none')
                        }
                        console.log('res: ', response)
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })
            });


            // // create pdf
            // $(document).on('click', '.js_create_pdf_btn', function() {
            //
            //     let content = $('.js_data_all_pdf').html()
            //     html2pdf(content);
            // });



        })

    </script>
@endsection
