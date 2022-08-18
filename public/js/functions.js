
/**
 * Number format
 * 12340 --> 12 340
 */
function number_format(number) {
    return number.toLocaleString('ru-RU');
}

//  ################## templates ####################


function select_date_month_fun_edit() {
    // tempalte 6 title
    $('.js_select_data_month1_title').removeClass('d-none')
    $('.js_span_date_month1_title').addClass('d-none')

    // 1
    $('.js_select_data_month1').removeClass('d-none')
    $('.js_span_date_month1').addClass('d-none')

    // 2
    $('.js_select_data_month2').removeClass('d-none')
    $('.js_span_date_month2').addClass('d-none')
}

function select_date_month_fun_save() {
    // tempalte 6 title month
    let select_month1_title = $('.js_select_data_month1_title')
    let span_month1_title = $('.js_span_date_month1_title')

    select_month1_title.addClass('d-none')
    span_month1_title.html(select_month1.val())
    span_month1_title.removeClass('d-none')


    // 1
    let select_month1 = $('.js_select_data_month1')
    let span_month1 = $('.js_span_date_month1')

    select_month1.addClass('d-none')
    span_month1.html(select_month1.val())
    span_month1.removeClass('d-none')

    // 2
    let select_month2 = $('.js_select_data_month2')
    let span_month2 = $('.js_span_date_month2')

    select_month2.addClass('d-none')
    span_month2.html(select_month2.val())
    span_month2.removeClass('d-none')
}


function create_div(number, response) {
    let tin_div;
    if(number == 1)
        tin_div = $('.js_tin_div1')
    else
        tin_div = $('.js_tin_div2')

    tin_div.find('.js_name').html('<b>'+response.name+'</b>').css('color', 'blue')
    tin_div.find('.js_address').html(response.address).css('color', 'blue')
    tin_div.find('.js_account').html(response.account).css('color', 'blue')
    tin_div.find('.js_mfo').html(response.mfo).css('color', 'blue')
    tin_div.find('.js_oked').html(response.oked).css('color', 'blue')
    tin_div.find('.js_tin').html(response.tin).css('color', 'blue')
    tin_div.find('.js_director').html(response.director).css('color', 'blue')

}


/** summa so'z bilan chiqarish uchun ajax **/
function get_sum_text_ajax(sum, sum_text) {
    let url = window.location.protocol + "//" + window.location.host + "/template/sum_text";
    let token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: url,
        type: 'POST',
        data: { '_token': token, 'sum': sum },
        dataType: 'JSON',
        success: (response) => {
            sum_text.html(response.many_text)
        },
        error: (response) => {
            console.log('error: ', response)
        }
    })
}



/** templates before save add d-none class **/
function afer_save_add_d_none_template() {

    $('.text_edit').attr('contenteditable', false).removeClass('text-red');
    $('.text_edit span').attr('contenteditable', false).removeClass('text-red');


    if ($('.text_edit').hasClass('text-red')) {
        $('.text_edit').removeClass('text-red');
    }
    if ($('.td-span-text').hasClass('text-red')) {
        $('.td-span-text').removeClass('text-red');
    }

    // 1
    $('.js_select_data_month1').addClass('d-none')
    $('.js_span_date_month1').removeClass('d-none')

    // 2
    $('.js_select_data_month2').addClass('d-none')
    $('.js_span_date_month2').removeClass('d-none')

    // 3 title
    $('.js_select_data_month1_title').addClass('d-none')
    $('.js_span_date_month1_title').removeClass('d-none')

    // table dynamic
    $('.create_tarif_tr1').removeClass('d-flex').addClass('d-none')
    $('.create_tarif_tr2').removeClass('d-flex').addClass('d-none')

    // add tr btns
    $('.add-tr-btns').addClass('d-none')

    // ul word icons
    $('.ul-word-icons').addClass('d-none')

    // horizontal-icons
    $('.horizontal-table-icons').addClass('d-none')
}



/** table add tr and group **/
function table_create_tr(table, js_tarif_select) {

    let tr_category = '', td3 = '';
    if (js_tarif_select == 'sip_trunc') {
        tr_category = 'SIP TRUNK';
        td3 = 'порт'
    }
    else if(js_tarif_select == 'phone') {
        tr_category = 'ТЕЛЕФОНИЯ';
        td3 = 'номер';
    }
    else if(js_tarif_select == 'internet') {
        tr_category = 'ИНТЕРНЕТ';
        td3 = 'точка';
    }
    else if(js_tarif_select == 'abonet') {
        tr_category = 'АБОНЕНТСКАЯ ЛИНИЯ';
        td3 = 'линия';
    }
    else if(js_tarif_select == 'vpn') {
        tr_category = 'VPN';
        td3 = 'точка';
    }

    // number
    let number = table.find('.js_tr_group').length+1

    let tr ='<tr class="js_tr_group js_'+js_tarif_select+'">\n' +
                '<td colspan="6" class="text-bold text-left" contenteditable="true"><b>'+number+'</b>. &emsp; &emsp; <span class="text_edit text-red">'+tr_category+'</span></td>\n' +
            '</tr>\n'+

            '<tr class="js_tr_item position-relative">\n' +
                '<td class="js_item_number"><b>'+number+'.1</b></td>\n' +
                '<td class="text-left">' +
                    '<span contenteditable="true" class="text_edit text-red td-span-text"><b>Абонентская плата**</b> <br/> Согласно тарифному плану</span>\n'+
                    '<ul class="ul-word-icons">\n' +
                        '<li class="js_text_bold_icon"><a href="#"><i class="fa-solid fa-bold mr-1"></i></a></li>\n' +
                        '<li class="js_text_italic_icon"><a href="#"><i class="fa-solid fa-italic mr-1"></i></a></li>\n' +
                        '<li class="js_text_underline_icon"><a href="#"><i class="fa-solid fa-underline"></i></a></li>\n' +
                        '<li class="js_text_tarif_name_icon"><a href="#"><i class="fa-solid fa-t"></i></a></li>\n'+
                    '</ul>\n'+
                '</td>\n' +
                '<td class="text_edit text-red text-center" contenteditable="true">'+td3+'</td>\n' +
                '<td class="text_edit text-red text-center js_table_sena" contenteditable="true">0</td>\n' +
                '<td class="text_edit text-red text-center js_table_count" contenteditable="true">1</td>\n' +
                '<td class="js_table_sum_all text-center text-bold">0</td>\n' +
                '<td class="position-absolute add-tr-btns">' +
                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm js_icon_remove_tr" title="delete row"><i class="fas fa-trash-alt"></i></a>\n'+
                    '<a href="javascript:void(0);" class="btn btn-info btn-sm js_icon_add_tr ml-1" title="add row"><i class="fas fa-plus"></i></a>\n'+
                '</td>\n' +
            '</tr>';

    // if(js_tarif_select !== '')
    table.find('tbody').append(tr)

}



/** table in add tr no group **/
function no_group_table_number_draw_and_calculation(table) {

    let trs_item = table.find('.js_tr_item')
    let summa = 0;
    $.each(trs_item, function(item, val) {

        $(val).find('.js_number').html(item + 1)

        let count = $(val).find('.js_table_count_total').html()
        let sena = $(val).find('.js_table_sena_total').html()
        // sena = sena.slice(0,sena.length).replace(' ', '');
        sena = sena.replaceAll(' ', '');
        sena = sena.replaceAll('&nbsp;', '');

        summa += sena * count;
    })

    summa = number_format(summa)
    table.find('.js_table_sum_all').html(summa);
}



/** horizontal table **/
function horizontal_table_in_td_draw(this_tr) {

    let table = this_tr.closest('.table')
    let tr_items = table.find('tr')

    let head_td = '', td_text, td_sena, td_count, td_total, td_total_sum = 0;

    let body_object = {}, j = 0;
    $.each(tr_items, function(i, one_tr) {

        if ($(one_tr).hasClass('js_tr_item')) {

            td_text = $(one_tr).find('td.js_table_text b.tarif_name').html()
            td_sena = $(one_tr).find('td.js_table_sena').html()
            td_count = $(one_tr).find('td.js_table_count').html()
            td_total = $(one_tr).find('td.js_table_sum_all').html()

            td_total = td_total.replace(' ', '');
            td_total_sum += parseFloat(td_total);

            head_td += '<td>\n' +
                            '<span class="text_edit">Абонентская плата согласно тарифному плану</span><br>\n' +
                            '<span class="text_edit text-bold">' + td_text + '</span>\n' +
                        '</td>\n' +
                        '<th>Кол-во</th>\n' +
                        '<td>\n' +
                            '<span class="text_edit">Итого Абонентская плата согласно тарифному плану</span><br>\n' +
                            '<span class="text_edit text-bold">' + td_text + '</span>\n' +
                        '</td>';


            body_object[j] = {
                'td_text': td_text,
                'td_sena': parseFloat(td_sena.replace('&nbsp;', '')),
                'td_count': parseInt(td_count.replace('&nbsp;', '')),
                'td_total': parseFloat(td_total.replace('&nbsp;', '')),
            }
            j++;

        }
    })


    head_td += '<td class="text-bold js_head_td_total">Итого выплат за период */**</td>';


    let horizontal_table = $('.js_table_horizontal');
    let trs = horizontal_table.find('tr');

    trs.find('td:first-child').nextAll().remove();


    let body_td = '', total_all_sum = 0, sena_ = 0, total_= 0, sub_total = [], footer_total_sena = 0, footer_total_total = 0, all_total = 0;

    $.each(body_object, function(index, one_object) {

        $.each(trs, function(i, one_tr) {

            if (index == 0 && $(one_tr).hasClass('js_head_tr')) {
                $(one_tr).find('td:first-child').after(head_td);
            }

            if (!$(one_tr).hasClass('js_head_tr')) {
                if(!sub_total[i-1]) {
                    sub_total[i-1] = 0
                }
                if (!$(one_tr).hasClass('tr-kvartl') && !$(one_tr).hasClass('tr-footer-all-sum') && !$(one_tr).hasClass('d-none') ) {

                    sena_ = sena_ + one_object.td_sena;
                    total_ = total_ + one_object.td_total;

                    sub_total[i-1] += one_object.td_total;

                    let s_ = number_format(one_object.td_sena);
                    let t_ = number_format(one_object.td_total);
                    body_td +=  '<td class="td-span-sena"><span class="text_edit">' + s_ + '</span></td>\n' +
                                '<td><span class="text_edit">' + one_object.td_count + '</span></td>\n' +
                                '<td class="td-span-itogo"><span class="text_edit">' + t_ + '</span></td>';
                }
                else if($(one_tr).hasClass('tr-kvartl') && !$(one_tr).hasClass('tr-footer-all-sum') && !$(one_tr).hasClass('d-none')) {
                    body_td +=  '<td class="td-span-sena"><span class="text_edit">' + number_format(sena_) + ' </span></td>\n' +
                                '<td></td>\n' +
                                '<td class="td-span-itogo"><span class="text_edit">' + number_format(total_) + '</span></td>';

                    sub_total[i-1] += parseFloat(total_);

                    footer_total_sena += parseFloat(sena_)
                    footer_total_total += parseFloat(total_)

                    sena_ = 0;
                    total_ = 0;
                }
                else if($(one_tr).hasClass('tr-footer-all-sum')) {

                    body_td +=  '<td><span class="text_edit">' + footer_total_sena + '</span></td>\n' +
                                '<td><span class="text_edit">' + one_object.td_count + '</span></td>\n' +
                                '<td><span class="text_edit">' + footer_total_total + '</span></td>';

                    footer_total_sena = 0;
                    footer_total_total = 0;
                }
            }

            $(one_tr).append(body_td);
            body_td = '';
        });

    });


    let sub_last_column = '';
    let new_tr = horizontal_table.find('tr')

    $.each(new_tr, function(n, one_tr) {

        if (!$(one_tr).hasClass('js_head_tr') && !$(one_tr).hasClass('tr-footer-all-sum') && !$(one_tr).hasClass('d-none')) {
            a = sub_total[n-1]
            // a = number_format(a);
            sub_last_column = '<td class="js_td_total"><span class="text_edit">' + a + '</span></td>';
            $(one_tr).append(sub_last_column)

            if (!$(one_tr).hasClass('tr-kvartl')) {
                all_total += sub_total[n-1];
            }
        }

    })

    // all summa
    let span_sum_text = $('.js_span_all_total_sum_text')
    get_sum_text_ajax(all_total, span_sum_text)


    all_total = number_format(all_total)
    $('.js_span_all_total_sum').html(all_total)

    let footer_total_tr = '<td class="js_td_total"><span class="text_edit text-bold">' + all_total + '</span></td>';

    let table_footer_tr_td = horizontal_table.find('.tr-footer-all-sum')
    table_footer_tr_td.append(footer_total_tr);

}


//  ################## templates ####################



