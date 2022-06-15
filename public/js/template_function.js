$(document).ready(function() {

    // edit btn
    $(document).on('click', '.js_text_edit_btn', function (e) {
        $('.js_div_form').removeClass('d-none')

        $(this).siblings('.btn').removeClass('d-none')
        $(this).addClass('d-none');

        $('.text_edit').attr('contenteditable', true).css('color', 'red');

        select_date_month_fun_edit()
    });

    // save btn
    $(document).on('click', '.js_text_save_btn', function (e) {
        $(this).siblings('.js_text_edit_btn').removeClass('d-none')
        $(this).siblings('.js_text_cancel_btn').addClass('d-none')
        $(this).addClass('d-none');

        $('.js_div_form').addClass('d-none')

        $('.text_edit').attr('contenteditable', false);

        select_date_month_fun_save()
    });


    // cancel btn
    $(document).on('click', '.js_text_cancel_btn', function (e) {
        $(this).siblings('.js_text_edit_btn').removeClass('d-none')
        $(this).siblings('.js_text_save_btn').addClass('d-none')
        $(this).addClass('d-none');

        $('.js_div_form').addClass('d-none')

        $('.text_edit').attr('contenteditable', false)
        location.reload();
    });




    // tin from
    $(document).on('click', '.js_tin_btn', function(e) {
        e.preventDefault()

        let number = $('.js_tin_number').val()
        let tin = $('.js_tin_input').val()
        if(tin.length == 9) {
            let url = "https://api.e-invoice.uz/api/ru/rouming/bytin/"+tin
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'JSON',
                success: (response) => {
                    create_div(number, response)
                },
                error: (response) => {
                    console.log('error: ', response)
                }
            })
        }
        else {
            alert('Tin error!')
        }
    })



    /******************************************** templates ********************************************/

    $(document).on('focusout', '.js_number', function() {
        let number = $(this).html()
        $('.js_number2').html(number)
    });

    /** date **/
    $(document).on('focusout', '.js_date_day', function() {
        let val = $(this).html()
        date_day_month_year_change('day', val)
    })

    $(document).on('change', '.js_date_month', function() {
        let val = $(this).val()
        date_day_month_year_change('month', val)
    })

    $(document).on('focusout', '.js_date_year', function() {
        let val = $(this).html()
        date_day_month_year_change('year', val)
    })

    $(document).on('focusout', '.js_date_month_html', function() {
        let val = $(this).html()
        date_day_month_year_change('month_html', val)
    })


    /** director name edit **/
    $(document).on('focusout', '.js_director_text', function() {
        let text = $(this).html().split(' ');

        console.log('t: ', text);
        $('.js_director_position').html(text.shift())

        let name = ''
        $.each(text, function(i, index) {
            name += index+' ';
        });
        $('.js_director_name').html(name)
    })


    /** summa 1  **/
    $(document).on('focusout', '.js_sum', function () {
        let sum = $(this).html()
        let sum_text = $('.js_sum_text')
        get_sum_text_ajax(sum, sum_text)
    });

    /** summa 2 **/
    $(document).on('focusout', '.js_sum2', function () {
        let sum2 = $(this).html()
        let sum_text2 = $('.js_sum_text2')
        get_sum_text_ajax(sum2, sum_text2)
    });



});


