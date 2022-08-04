$(document).ready(function() {

    // edit btn
    $(document).on('click', '.js_text_edit_btn', function (e) {
        $('.js_div_form').removeClass('d-none')

        $(this).siblings('.btn').removeClass('d-none')
        $(this).addClass('d-none');

        $('.text_edit').attr('contenteditable', true).css('color', 'red');

        select_date_month_fun_edit()


        // table dynamic
        $('.create_tarif_tr1').removeClass('d-none').addClass('d-flex')
        $('.create_tarif_tr2').removeClass('d-none').addClass('d-flex')

        // add tr btns
        $('.add-tr-btns').removeClass('d-none')

        // ul word icons
        $('.ul-word-icons').removeClass('d-none')

        // horizontal-icons
        $('.horizontal-table-icons').removeClass('d-none')
    });



    // cancel btn
    $(document).on('click', '.js_text_cancel_btn', function (e) {
        $(this).siblings('.js_text_edit_btn').removeClass('d-none')
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
                    // console.log('res', response)
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



    // file uploaded
    $('#inp-add-2').fileinput({
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'jpeg', 'png', 'pdf']
    });
    $('.fileinput-upload-button').addClass('d-none');
    $('.fileinput-remove-button').removeClass('btn-outline-secondary').addClass('btn-secondary');

    let upload_btn = $('.kv-file-upload');
    if(!upload_btn.hasClass('d-none')) {
        setInterval(function() {
            $('.kv-file-upload').addClass('d-none').css('border-color', '#6c757d');
        }, 1000);
    }
    $('.btn-file .hidden-xs').addClass('ml-2').html('Файл загружен');
    $('.fileinput-remove .hidden-xs').html(' Удалять');



    // send to jurists btn
    $(document).on('click', '.js_send_to_jurists_btn', function(e) {
        e.preventDefault()

        let token   =  $('meta[name="csrf-token"]').attr('content');
        let id      = $(this).data('id')
        let url     = $(this).data('url');

        $(this).addClass('d-none');

        $.ajax({
            url: url,
            type: 'POST',
            data: { '_token': token, 'id': id },
            dataType: 'JSON',
            success: (response) => {
                console.log('res', response)
                if(response.status)
                    location.reload();
                    // $(this).addClass('d-none');
            },
            error: (response) => {
                console.log('error: ', response)
            }
        })
    })

    /******************************************** templates ********************************************/

    // month1 chage
    $(document).on('change', '.js_select_data_month1', function() {
        let month = $(this).val();
        $('.js_span_date_month1').html(month);
    });

    // month2 change
    $(document).on('change', '.js_select_data_month2', function() {
        let month = $(this).val();
        $('.js_span_date_month2').html(month);
    });

    // title month1 chage tempalte 6
    $(document).on('change', '.js_select_data_month1_title', function() {
        let month = $(this).val();
        $('.js_span_date_month1_html').html(month);
    });



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


    // contract title number 106 .. tempalte 6
    $(document).on('focusout', '.js_date_year1_title', function() {
        let number = $(this).html()
        $('.js_date_year1_span').html(number)
    });


    /** date **/
    $(document).on('focusout', '.js_date_day', function() {
        let val = $(this).html()
        $('.js_date_day_static').html(val)
    })

    // tempalte 6 title number
    $(document).on('focusout', '.js_date_day_title', function() {
        let val = $(this).html()
        $('.js_date_day_html').html(val)
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

    // year2 <__> ____ 2021 yili uchun
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


    /** ###################################################### - No group table events ###################################################### **/

    /** Table diynamic tr add  no group**/
    $(document).on('click', '.js_icon_add_tr_no_group', function() {
        let tr = '<tr class="js_tr_item">\n' +
                    '<td class="js_number">1</td>\n' +
                    '<td style="line-height: 1; text-align: left; font-size: 16px;">\n' +
                    '  <span class="text-bold text-underline text_edit" contenteditable="true">Организация новой абонентской линии СП ООО «Ist Telekom»:*</span>\n' +
                    '  <span class="text-bold text_edit" contenteditable="true">Ташкентская область Уртачирчикский район, массив Ахунбабаева, поселок Кумовул</span>\n' +
                    '</td>\n' +
                    '<td class="text_edit align-middle text-center" contenteditable="true">линия</td>\n' +
                    '<td class="text_edit align-middle text-center js_table_count_total" contenteditable="true">1</td>\n' +
                    '<td class="text_edit align-middle text-center js_table_sena_total" contenteditable="true">14 000 000</td>\n' +
                    '<td class="position-absolute add-tr-btns">\n' +
                    '  <a href="javascript:void(0);" class="btn btn-danger btn-sm js_icon_remove_tr_no_group" title="delete row"><i class="fas fa-trash-alt"></i></a>\n' +
                    '  </td>\n' +
                '</tr>'

        $('.js_table1').find('.js_tr_total').before(tr)


        let table = $('.js_table1')
        no_group_table_number_draw_and_calculation(table)

    })

    /** click trash icon remove tr no group **/
    $(document).on('click', '.js_icon_remove_tr_no_group', function() {
        let tr = $(this).closest('.js_tr_item')
        tr.remove()

        let table = $('.js_table1')
        no_group_table_number_draw_and_calculation(table)
    });

    /** total sum  no grpup tr ИТОГО **/
    $(document).on('focusout', '.js_table_sena_total', function() {
        let table = $('.js_table1')


        no_group_table_number_draw_and_calculation(table)

        let sum = $(this).html()
        sum = number_format(sum);

        console.log('sum: ', sum)
        $(this).val(sum);
    })

    $(document).on('focusout', '.js_table_count_total', function() {
        let table = $('.js_table1')
        no_group_table_number_draw_and_calculation(table)
    })

    /** ###################################################### - ./ No group table events ###################################################### **/


    /** table1 **/
    $(document).on('click', '.js_btn_add_tr_to_table1', function() {

        let table = $('.js_add_tarif_to_table1');
        let js_tarif_select = $('.js_tarif_select1 option:selected').val();

        table_create_tr(table, js_tarif_select)
    });

    /** table2 **/
    $(document).on('click', '.js_btn_add_tr_to_table2', function() {

        let table = $('.js_add_tarif_to_table2');
        let js_tarif_select = $('.js_tarif_select2 option:selected').val();

        table_create_tr(table, js_tarif_select)
    });
    

    $(document).on('focusout', '.js_table_sena', function() {
        let sena    = $(this).html();
        let tr_item = $(this).closest('.js_tr_item')
        let count   = tr_item.find('.js_table_count').html();

        // sena = sena.slice(0,sena.length-2).replace(' ', '');
        sena = sena.replaceAll(' ', '');
        sena = sena.replaceAll('&nbsp;', '');

        let sum =  parseFloat(sena) * parseInt(count);
        sum = number_format(sum)
        tr_item.find('.js_table_sum_all').html(sum)

        sena = number_format(parseFloat(sena))
        $(this).html(sena)


        // horizontall table
        horizontal_table_in_td_draw($(this))
    })

    $(document).on('focusout', '.js_table_count', function() {
        let count    = $(this).html();
        let tr_item = $(this).closest('.js_tr_item')
        let sena   = tr_item.find('.js_table_sena').html();

        sena = sena.replaceAll(' ', '');
        sena = sena.replaceAll('&nbsp;', '');

        let sum = parseFloat(sena) * parseInt(count);
        sum = number_format(sum).toString()
        tr_item.find('.js_table_sum_all').html(sum)


        // horizontall table
        horizontal_table_in_td_draw($(this))
    })



    // click plus icon add tr
    $(document).on('click', '.js_icon_add_tr', function() {
        let tr = $(this).closest('.js_tr_item');

        let number = tr.find('.js_item_number b').html()*1 + 0.1
        number = number.toFixed(1)

        let new_tr = '<tr class="js_tr_item">\n' +
                        '<td class="text_edit js_item_number" contenteditable="true"><b>'+number+'</b></td>\n' +
                        '<td class="text_edit js_table_text position-relative">' +
                            '<span contenteditable="true" class="td-span-text"><b>Абонентская плата**</b> <br/> Согласно тарифному плану</span>\n'+
                            '<ul class="ul-word-icons">\n' +
                                '<li class="js_text_bold_icon"><a href="#"><i class="fa-solid fa-bold mr-1"></i></a></li>\n' +
                                '<li class="js_text_italic_icon"><a href="#"><i class="fa-solid fa-italic mr-1"></i></a></li>\n' +
                                '<li class="js_text_underline_icon"><a href="#"><i class="fa-solid fa-underline"></i></a></li>\n' +
                                '<li class="js_text_tarif_name_icon"><a href="#"><i class="fa-solid fa-t"></i></a></li>\n'+
                            '</ul>\n'+
                        '</td>\n' +
                        '<td class="text-center text_edit" contenteditable="true">номер</td>\n' +
                        '<td class="text_edit js_table_sena text-center" contenteditable="true">0</td>\n' +
                        '<td class="text_edit js_table_count text-center" contenteditable="true">1</td>\n' +
                        '<td class="js_table_sum_all text-center">0</td>\n' +
                        '<td class="position-absolute add-tr-btns">' +
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm js_icon_remove_tr" title="delete row"><i class="fas fa-trash-alt"></i></a>\n'+
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm js_icon_add_tr ml-1" title="add row"><i class="fas fa-plus"></i></a>\n'+
                        '</td>\n' +
                    '</tr>';

        tr.after(new_tr)
        $(this).addClass('d-none')

        horizontal_table_in_td_draw($(this))
    });



    // click trash icon remove tr
    $(document).on('click', '.js_icon_remove_tr', function() {
        let table = $(this).closest('.table')
        let tr = $(this).closest('.js_tr_item')
        let this_tr = $(this).closest('.js_tr_item')
        // let n = 1;

        let prev =  tr.prev()
        let next =  tr.next()
        if ( (prev.hasClass('js_tr_group') && next.hasClass('js_tr_group') ) || (prev.hasClass('js_tr_group') && next.length === 0) ) {
            prev.remove()
            tr.remove()
        }
        else {
            let table = $(this).closest('.table')
            let trs = table.find('tr')

            tr.remove()
            if (next.hasClass('js_tr_group') || next.length === 0)
                prev.find('.js_icon_add_tr').removeClass('d-none')
        }



        let trs = table.find('tbody tr')
        let this_number = this_tr.find('td b').html()

        let n  = this_number[0];

        let m = 1;

        // ------- //
        let a = 1, b = 0;


        $.each(trs, function (item, val) {

            if ($(val).find('td b').html()) {

                let s = $(val).find('td b').html();
                if (a != s[0] && b != 0) {

                    if ($(val).hasClass('js_tr_group'))
                        a++;

                    if (s[2])
                        $(val).find('td b').html(a + '.' + s[2]);
                    else
                        $(val).find('td b').html(a);
                }
                else {
                    if (s[2])
                        $(val).find('td b').html(a + '.' + s[2]);
                    else
                        $(val).find('td b').html(a);
                }

                b++;

                if (!$(val).hasClass('js_tr_group')) {
                    let t = $(val).find('td b').html();

                    if (t[0] == n) {
                        $(val).find('td b').html(n+'.'+m)
                        m++;
                    }
                }

            }

            // horizontall table
            horizontal_table_in_td_draw($(this))

        })


    });


    /** ################################# TEMPLATE 4 ############################ **/

    // add tr
    $(document).on('click', '.js_template4_icon_add_tr', function() {

        let this_tr = $(this).closest('tr')
        let tr = '<tr>\n' +
                    '<td class="align-middle text-center js_number">1</td>\n' +
                    '<td class="align-middle text-center text_edit" contenteditable="true">1</td>\n' +
                    '<td class="align-middle">\n' +
                        '<span class="text_edit" contenteditable="true">г.Ташкент, Мирзо-Улугбекский р-н, улица </span><br/>\n' +
                        '<span class="text_edit" contenteditable="true">Зиёлилар, дом 9 (10277) - г.Ташкент, АТС 241</span>\n' +
                    '</td>\n' +
                    '<td class="align-middle text-center"><span class="text_edit" contenteditable="true">100 Мб/с</span></td>\n' +
                    '<td class="align-middle text-center"><span class="text_edit" contenteditable="true">местный</span></td>\n' +
                    '<td class="align-middle text-center"><span class="text_edit" contenteditable="true">ВОЛС стыковка с абонентом</span></td>\n' +
                    '<td class="align-middle text-center"><span class="text_edit" contenteditable="true">75 000,00</span></td>\n' +
                    '<td class="align-middle text-center"><span class="text_edit" contenteditable="true">1 000 000,0</span></td>\n' +
                    '<td class="align-middle text-center"><span class="text_edit" contenteditable="true">Ethernet</span></td>\n' +
                    '<td class="position-absolute add-tr-btns">\n' +
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm js_template4_icon_remove_tr" title="delete row"><i class="fas fa-trash-alt"></i></a>\n' +
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm js_template4_icon_add_tr ml-1" title="add row"><i class="fas fa-plus"></i></a>\n' +
                    '</td>\n' +
                 '</tr>';


        let table = $(this).closest('.table')
        table.append(tr)

        this_tr.find('.js_template4_icon_remove_tr').removeClass('d-none')
        $(this).addClass('d-none')

        let trs = table.find('tr')
        $.each(trs, function(item, tr) {
            $(tr).find('.js_number').html(item)
        })

    })


    // remove tr
    $(document).on('click', '.js_template4_icon_remove_tr', function() {

        let table = $(this).closest('.table')
        let this_tr = $(this).closest('tr')

        this_tr.remove()

        let last_tr = table.find('tr:last-child')
        if(last_tr.find('.js_template4_icon_add_tr').hasClass('d-none'))
            last_tr.find('.js_template4_icon_add_tr').removeClass('d-none')

        let tr = table.find('tr')
        if (tr.length == 2)
            tr.find('.js_template4_icon_remove_tr').addClass('d-none')

        let trs = table.find('tr')
        $.each(trs, function(item, tr) {
            $(tr).find('.js_number').html(item)
        });

    })

    /** ################################# ./template 4 ############################ **/




    /** ################################# TEMPLATE 6 ############################ **/

    // add tr
    $(document).on('click', '.js_template6_icon_add_tr', function() {

        let this_tr = $(this).closest('tr')
        let tr = '<tr>\n' +
                    '<td class="js_number">2.</td>\n' +
                    '<td class="text_edit" contenteditable="true">1</td>\n' +
                    '<td class="text_edit" contenteditable="true">от AMTS/ATS-223 г. Навои, улица Навои 5-Д, до узла 21052 Gulshan Rano</td>\n' +
                    '<td class="text_edit" contenteditable="true">4 Мб/c</td>\n' +
                    '<td class="text_edit" contenteditable="true">местный</td>\n' +
                    '<td class="text_edit" contenteditable="true">84 000,0</td>\n' +
                    '<td class="text_edit" contenteditable="true">40 000,0</td>\n' +
                    '<td class="text_edit" contenteditable="true">Ethernet</td>\n' +
                    '<td class="position-absolute add-tr-btns">\n' +
                    '    <a href="javascript:void(0);" class="btn btn-danger btn-sm js_template6_icon_remove_tr" title="delete row"><i class="fas fa-trash-alt"></i></a>\n' +
                    '    <a href="javascript:void(0);" class="btn btn-info btn-sm js_template6_icon_add_tr ml-1" title="add row"><i class="fas fa-plus"></i></a>\n' +
                    '</td>\n' +
                '</tr>';


        let table = $(this).closest('.table')
        table.append(tr)

        this_tr.find('.js_template6_icon_remove_tr').removeClass('d-none')
        $(this).addClass('d-none')

        let trs = table.find('tr')
        $.each(trs, function(item, tr) {
            $(tr).find('.js_number').html(item)
        })

    })


    // remove tr
    $(document).on('click', '.js_template6_icon_remove_tr', function() {

        let table = $(this).closest('.table')
        let this_tr = $(this).closest('tr')
        this_tr.remove()

        let last_tr = table.find('tr:last-child')
        console.log('last: ', last_tr.length)
        if(last_tr.find('.js_template6_icon_add_tr').hasClass('d-none'))
            last_tr.find('.js_template6_icon_add_tr').removeClass('d-none')


        let trs = table.find('tr')
        $.each(trs, function(item, tr) {
            $(tr).find('.js_number').html(item)
        });

    })

    /** ################################# ./template 6 ############################ **/





    /** ################################# ./template 5 ############################ **/

    /** Horizontal cvartl add **/
    $(document).on('click', '.js_icon_btn_hide_tr', function() {

        let trs = $('.js_table_horizontal').find('tr')
        let this_number = $(this).data('tr_number')

        $.each(trs, function(item, one_tr) {

            if ($(one_tr).data('tr_number') == this_number)
                $(one_tr).addClass('d-none')

        })

        $(this).removeClass('fa-eye js_icon_btn_hide_tr text-danger')
        $(this).addClass('fa-eye-slash js_icon_btn_show_tr text-primary')

    });


    /** Horizontal cvartl remove **/
    $(document).on('click', '.js_icon_btn_show_tr', function() {

        let trs = $('.js_table_horizontal').find('tr')
        let this_number = $(this).data('tr_number')

        $.each(trs, function(item, one_tr) {

            if ($(one_tr).data('tr_number') == this_number)
                $(one_tr).removeClass('d-none')

        })

        $(this).removeClass('fa-eye-slash js_icon_btn_show_tr text-primary')
        $(this).addClass('fa-eye js_icon_btn_hide_tr text-danger')

    })


    /** ################################# ./template 5 ############################ **/


    /**  bold, italic, underline tarif name text in tables **/

    // bold
    $(document).on('click', '.js_text_bold_icon', function(e) {
        e.preventDefault();

        let td = $(this).closest('td');
        let span = td.find('.td-span-text')

        if (window.getSelection()) {

            let select = window.getSelection();

            if (select.toString() != '') {
                let new_replace_text = '<b>' + select.toString() + '</b>';

                let span_text = span.html();
                let new_td_text = span_text.replaceAll(select.toString(), new_replace_text);
                span.html(new_td_text)
            }
        }

    })


    // italic
    $(document).on('click', '.js_text_italic_icon', function(e) {
        e.preventDefault();

        let td = $(this).closest('td');
        let span = td.find('.td-span-text')

        if (window.getSelection()) {

            let select = window.getSelection();

            if (select.toString() != '') {
                let new_replace_text = '<i>' + select.toString() + '</i>';

                let span_text = span.html();
                let new_td_text = span_text.replaceAll(select.toString(), new_replace_text);
                span.html(new_td_text)
            }
        }
    })


    // underline
    $(document).on('click', '.js_text_underline_icon', function(e) {
        e.preventDefault();

        let td = $(this).closest('td');
        let span = td.find('.td-span-text')

        if (window.getSelection()) {

            let select = window.getSelection();
            if (select.toString() != '') {
                let new_replace_text = '<u>' + select.toString() + '</u>';

                let span_text = span.html();
                let new_td_text = span_text.replaceAll(select.toString(), new_replace_text);
                span.html(new_td_text)
            }
        }

    })


    // tarif name
    $(document).on('click', '.js_text_tarif_name_icon', function(e) {
        e.preventDefault();

        let td = $(this).closest('td');
        let span = td.find('.td-span-text')

        if (window.getSelection()) {

            let select = window.getSelection();
            if (select.toString() != '') {
                let new_replace_text = '<b class="tarif_name">' + select.toString() + '</b>';

                let span_text = span.html();
                let new_td_text = span_text.replace(select.toString(), new_replace_text);
                span.html(new_td_text)

                horizontal_table_in_td_draw(td);
                console.log('ttt')
            }
        }

    })


});





/** ################################################################# **/


