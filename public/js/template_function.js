$(document).ready(function() {

    // edit btn
    $(document).on('click', '.js_text_edit_btn', function (e) {
        $('.js_div_form').removeClass('d-none')

        $(this).siblings('.btn').removeClass('d-none')
        $(this).addClass('d-none');

        $('.text_edit').attr('contenteditable', true)

        select_date_month_fun_edit()


        // contract 1
        let list3_tr4_select2_text1 = $('.js_list3_tr4_select2_text1')
        list3_tr4_select2_text1.addClass('d-none')

        let list3_tr4_select2_div1 = $('.js_list3_tr4_select2_div1')
        list3_tr4_select2_div1.removeClass('d-none')

        // contract 1 select 2
        let list3_tr4_select2_text2 = $('.js_list3_tr4_select2_text2')
        list3_tr4_select2_text2.addClass('d-none')

        let list3_tr4_select2_div2 = $('.js_list3_tr4_select2_div2')
        list3_tr4_select2_div2.removeClass('d-none')

    });

    // save btn
    $(document).on('click', '.js_text_save_btn', function (e) {
        $(this).siblings('.js_text_edit_btn').removeClass('d-none')
        $(this).siblings('.js_text_cancel_btn').addClass('d-none')
        $(this).addClass('d-none');

        // contract 1
        let list3_tr4_select2_text1 = $('.js_list3_tr4_select2_text1')
        list3_tr4_select2_text1.removeClass('d-none')

        let list3_tr4_select2_div1 = $('.js_list3_tr4_select2_div1')
        list3_tr4_select2_div1.addClass('d-none')

        // contract 1 select 2
        let list3_tr4_select2_text2 = $('.js_list3_tr4_select2_text2')
        list3_tr4_select2_text2.removeClass('d-none')

        let list3_tr4_select2_div2 = $('.js_list3_tr4_select2_div2')
        list3_tr4_select2_div2.addClass('d-none')


        $('.js_div_form').addClass('d-none')

        $('.text_edit').attr('contenteditable', false)




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

});


