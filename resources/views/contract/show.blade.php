@extends('layouts.app')

@section('style')
    @php
        use App\Http\Controllers\ContractController;
        $id = Request::segment(2);
    @endphp

@endsection

@section('content')

    <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>

    <div class="btn-group-vertical contract-number-btn-group d-none" role="group" aria-label="lists btn">
        <button type="button" class="btn btn-outline-primary">№ &nbsp; 1</button>
        <button type="button" class="btn btn-outline-primary">№ &nbsp; 2</button>
        <button type="button" class="btn btn-outline-primary">№ &nbsp; 3</button>
    </div>


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
                <label for="comment"></label>
                <textarea class="form-control mt-3 js_comment" id="comment" name="comment" cols="40" rows="2" placeholder="Comment"></textarea>
            </div>
        @endif


        <div class="js_data_all_pdf {{ $contract->class }}">

            @php echo $contract->data; @endphp

        </div>

    </section>

@endsection


@section('script')

    <script>

        $(document).ready(function() {

            $(document).on('click', '.js_accept_or_decline_btn', function(e) {
                e.preventDefault();

                let check_div = $(this).closest('.js_check_div')
                let id = check_div.data('id')
                let status = $(this).data('status')
                let comment = $('.js_comment').val()
                let token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '{{ route('contract.update_status') }}',
                    type: 'POST',
                    data: { '_token': token, 'id': id, 'status': status, 'comment': comment },
                    dataType: 'JSON',
                    success: (response) => {
                        console.log(response)
                        if (response.status) {
                            if (response.contract_status == '1')
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
