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
                    console.log('res', response)
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


    // № 4, 5, ...
    $(document).on('focusout', '.js_number_n', function() {
        let number = $(this).html()
        $('.js_number_n_static').html(number)
    });

    // contract number 106 ..
    $(document).on('focusout', '.js_number', function() {
        let number = $(this).html()
        $('.js_number2').html(number)
    });

    /** date **/
    $(document).on('focusout', '.js_date_day', function() {
        let val = $(this).html()
        $('.js_date_day_static').html(val)
    })

    $(document).on('change', '.js_date_month', function() {
        let val = $(this).val()
        $('.js_date_month_static').html(val)
    })

    $(document).on('focusout', '.js_date_year', function() {
        let val = $(this).html()
        $('.js_date_year_static').html(val)
    })

    $(document).on('focusout', '.js_date_month_html', function() {
        let val = $(this).html()
        $('.js_date_month_html_static').html(val)
    })

    // year2 <__> ____ 20121 yili uchun
    $(document).on('focusout', '.js_date_year2', function() {
        let val = $(this).html()
        $('.js_date_year2_static').html(val)
    })


    $(document).on('focusout', '.js_director_position_dynamic', function() {
        let val = $(this).html()
        $('.js_position_static').html(val)
    })

    $(document).on('focusout', '.js_director_name_dynamic', function() {
        let val = $(this).html()
        $('.js_name_static').html(val)
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



    /** Table diynamic tr add **/

    $(document).on('click', '.js_btn_add_tr_to_table1', function() {

        let table1   = $('.js_add_tarif_to_table1');
        let js_tarif_select1 = $('.js_tarif_select1 option:selected').val();

        let val = '', td3 = '';
        if (js_tarif_select1 == 'sip_trunc') {
            val = 'SIP TRUNK';
            td3 = 'порт'
        }
        else if(js_tarif_select1 == 'phone') {
            val = 'ТЕЛЕФОНИЯ';
            td3 = 'номер';
        }
        else if(js_tarif_select1 == 'internet') {
            val = 'ИНТЕРНЕТ';
            td3 = 'точка';
        }

        // number
        let prev_tr_group = table1.find('.js_tr_group:last td').html()
        let number = prev_tr_group.slice(0,1) * 1 + 1;


        let tr = '<tr class="js_tr_group js_'+js_tarif_select1+'">\n' +
                 '    <td colspan="6" class="text-bold">'+number+'. &emsp; &emsp; '+val+'</td>\n' +
                 '</tr>\n'+

                '<tr class="js_tr_item">\n' +
                '     <td>'+number+'.1</td>\n' +
                '     <td class="text_edit" contenteditable="true"></td>\n' +
                '     <td>'+td3+'</td>\n' +
                '     <td class="text_edit js_table_sena" contenteditable="true">2 800 000.0</td>\n' +
                '     <td class="text_edit js_table_count" contenteditable="true">1</td>\n' +
                '     <td class="js_table_sum_all">2 800 000.0</td>\n' +
                '</tr>';

        table1.find('tbody').append(tr)
    });


    $(document).on('focusout', '.js_table_sena', function() {
        let sena    = $(this).html();
        let tr_item = $(this).closest('.js_tr_item')
        let count   = tr_item.find('.js_table_count').html();

        sena = sena.slice(0,sena.length-2).replace(' ', '');
        sena = sena.replace(' ', '');

        let sum = sena * count;
        sum = number_format(sum)+'.0'
        tr_item.find('.js_table_sum_all').html(sum)
    })



});


