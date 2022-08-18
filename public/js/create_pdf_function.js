// scroll stop
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
    e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; }
    }));
} catch(e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    $('body').css({'overflow': 'hidden'})
}




// if(c_id) {
    $(document).on('click', '.js_create_pdf_btn', function () {

        window.scrollTo(0, 0)
        $(document).scrollTop(0);

        disableScroll();

        setTimeout(function () {
            window.removeEventListener('DOMMouseScroll', preventDefault, false);
            window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
            window.removeEventListener('touchmove', preventDefault, wheelOpt);
            window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
            $('body').css({'overflow': 'auto'})
            console.clear();
        }, 4000);


        let show_view_pdf_div = $('.js_data_all_pdf');
        let name = show_view_pdf_div.find('.js_title').html();

        let opt = {
            margin: [5, 0],
            filename: name + '.pdf',
            html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
        };

        if (show_view_pdf_div.data('template_number') == 1) { //############# template 1 #############//

            let template1 = $('.js_data_all_pdf div');

            template1.css({
                'font-size': '7.8pt',
                'color': 'black',
            });

            template1.find('.row').css({'font-size': '7.9pt'});
            template1.find('p').css({'font-size': '7.9pt'});
            template1.find('thead tr td').css({'padding': '1mm'});
            template1.find('table .td-span').css({'font-size': '7px'});
            template1.find('h4').css({'font-size': '8pt'});

            template1 = template1.html();

            let opt = {
                margin: [5, 0, 5, 1],
                filename: name + '.pdf',
                html2canvas: {scale: 4, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
            };

            setTimeout(function () {
                html2pdf().set(opt).from(template1).save();
            }, 1500);

        } else if (show_view_pdf_div.data('template_number') == 2) { //############# template 2 #############//

            let template2 = $('.js_data_all_pdf div');

            template2.css({'font-size': '10pt'});

            template2 = template2.html();
            opt.margin = [5, 2, 5, 3];


            setTimeout(function () {
                html2pdf().set(opt).from(template2).save();
            }, 1500);

        } else if (show_view_pdf_div.data('template_number') == 3) { //############# template 3 #############//

            let template3 = $('.js_data_all_pdf div');
            template3.css({'font-size': '11pt', 'color': 'black'});
            template3.find('h4').css({
                'font-size': '11.2pt'
            });
            template3 = template3.html();
            opt.margin = [5, 2, 5, 3];


            setTimeout(function () {
                html2pdf().set(opt).from(template3).save();
            }, 1500);
        } else if (show_view_pdf_div.data('template_number') == 4) { //############# template 4 #############//

            // vertical lists
            let template4_1 = $('.js_data_all_pdf div');
            template4_1.css({'font-size': '10.5pt', 'color': 'black'});
            template4_1.find('h4').css('font-size', '10.7pt');

            template4_1.find('.horizontal-list').addClass('d-none');
            template4_1 = template4_1.html();

            let opt1 = {
                margin: 0,
                filename: name + '1.pdf',
                html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
            };

            setTimeout(function () {
                html2pdf().set(opt1).from(template4_1).save();
            }, 1500);

            $('.horizontal-list').removeClass('d-none');

            // horizontal list
            let template4_2 = $('.horizontal-list');
            template4_2.css({'font-size': '10.5pt', 'color': 'black'});

            template4_2.find('.table').css('margin-top', '20px');
            template4_2.find('p, span').css('color', 'black');


            template4_2 = template4_2.html();

            let opt2 = {
                margin: [5, 7.5],
                filename: name + '2.pdf',
                html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
            };


            setTimeout(function () {
                html2pdf().set(opt2).from(template4_2).save();
            }, 1500);

        } // ./4
        else if (show_view_pdf_div.data('template_number') == 5) { //############# template 5 Бюджет 1 #############//

            let template5_1 = $('.js_data_all_pdf div');
            template5_1.css({'font-size': '7.8pt', 'color': 'black'});
            template5_1.find('table thead tr th').css('color', '#000');
            template5_1.find('table tbody tr td').css({'padding': '6pt', 'font-size': '8pt', 'color': '#000'});

            template5_1.find('.horizontal-list').addClass('d-none');
            template5_1 = template5_1.html();

            let opt1 = {
                margin: 0,
                filename: name + '1.pdf',
                html2canvas: {scale: 4, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
            };

            setTimeout(function () {
                html2pdf().set(opt1).from(template5_1).save();
            }, 3000);


            $('.horizontal-list').removeClass('d-none');

            // horizontal list
            let template5_2 = $('.js_data_all_pdf .horizontal-list');
            template5_2.css('padding-right', '5px');
            template5_2.find('p, span, *').css('color', 'black');
            template5_2.find('thead tr td, tbody tr td, thead tr th').css({
                'padding': '2px',
                'font-size': '2mm',
            });

            template5_2 = template5_2.html();

            let opt2 = {
                margin: [5, 7.5],
                filename: name + '2.pdf',
                html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
            };

            setTimeout(function () {
                html2pdf().set(opt2).from(template5_2).save();
            }, 2000);

        } else if (show_view_pdf_div.data('template_number') == 6) { //############# template 6 #############//

            let template6 = $('.js_data_all_pdf div');
            template6.css({
                'font-size': '10pt',
                'color': 'black',
                'line-height': '1.3'
            });

            template6.find('table').css({
                'text-align': 'center',
                'padding': '2mm',
                'font-size': '9pt'
            });

            template6 = template6.html();
            opt.margin = 0;

            setTimeout(function () {
                html2pdf().set(opt).from(template6).save();
            }, 2000);
        } else if (show_view_pdf_div.data('template_number') == 7) { //############# template 7 #############//

            let template7 = $('.js_data_all_pdf div');
            template7.css({'font-size': '9pt', 'color': 'black'});
            template7.find('.div-list1 p').css({'font-size': '8pt'});

            template7.find('.div-list2 .table tr td:nth-child(1)').css('width', '4%');
            template7.find('.div-list2 .table tr td:nth-child(2)').css('width', '30%');
            template7.find('.div-font-small').css({'font-size': '7.5pt', 'margin-top': '8px'});
            template7.find('.div-list4 div').css('font-size', '8.5pt');

            template7 = template7.html();
            opt.margin = 0;

            setTimeout(function () {
                html2pdf().set(opt).from(template7).save();
            }, 3000);

        } else if (show_view_pdf_div.data('template_number') == 8) { //############# template 8 Бюджет 2 #############//

            let template8_1 = $('.js_data_all_pdf div');
            template8_1.css({'font-size': '7.6pt', 'color': 'black'});
            template8_1.find('thead tr td, tbody tr td').css({
                'padding': '6px',
                'color': 'black',
                'font-size': '7.7pt'
            });


            template8_1.find('.horizontal-list').addClass('d-none');
            template8_1 = template8_1.html();

            let opt1 = {
                margin: 0,
                filename: name + '1.pdf',
                html2canvas: {scale: 4, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
            };

            setTimeout(function () {
                html2pdf().set(opt1).from(template8_1).save();
            }, 3000);

            $('.horizontal-list').removeClass('d-none');

            // horizontal list
            let template8_2 = $('.js_data_all_pdf .horizontal-list');
            template8_2.css('padding-right', '5px');
            template8_2.find('p, span, *').css('color', 'black');
            template8_2.find('thead tr td, tbody tr td, thead tr th').css({
                'padding': '2px',
                'font-size': '7.5pt',
            });

            template8_2 = template8_2.html();

            let opt2 = {
                margin: [5, 7.5],
                filename: name + '2.pdf',
                html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
            };

            setTimeout(function () {
                html2pdf().set(opt2).from(template8_2).save();
            }, 2000);


        } else if (show_view_pdf_div.data('template_number') == 9) { //############# template 9 #############//

            let template9 = $('.js_data_all_pdf div');
            template9.css({'font-size': '11pt', 'color': 'black'});

            template9 = template9.html();
            opt.margin = [3, 5, 3, 5];

            setTimeout(function () {
                html2pdf().set(opt).from(template9).save();
            }, 1500);

        }
            // else if ((show_view_pdf_div.data('template_number') == 10) || (show_view_pdf_div.data('template_number') == 11)) { //############# template 7 or 10 or 11 #############//
            //
            //     let template7_10_11 = $('.js_data_all_pdf div');
            //     template7_10_11.css({'font-size': '9.5pt', 'color': 'black'});
            //     template7_10_11.find('p.mb-2').css('margin-top', '5px');
            //     template7_10_11.find('.div-list1 p').css({'font-size': '8pt'});
            //
            //
            //     template7_10_11.find('.div-list2 .table tr td:nth-child(1)').css('width', '4%');
            //     template7_10_11.find('.div-list2 .table tr td:nth-child(2)').css('width', '30%');
            //     template7_10_11.find('.div-font-small').css({'font-size': '7.5pt', 'margin-top': '5px'});
            //     template7_10_11.find('.div-list4 div').css('font-size', '8.5pt');
            //
            //     template7_10_11.find('.horizontal-list').addClass('d-none');
            //
            //     template7_10_11 = template7_10_11.html();
            //
            //     opt.margin = [3, 2, 3, 3];
            //
            //     setTimeout( function (){
            //         html2pdf().set(opt).from(template7_10_11).save();
            //     }, 3000);
            //
            //     $('.horizontal-list').removeClass('d-none');
            //
            //     // horizontal list
            //     let template11_2 = $('.horizontal-list');
            //     template11_2.css({'font-size': '7.7pt', 'color': 'black !;'});
            //
            //     template11_2.find('.table').css('margin-top', '0');
            //     template11_2.find('p, span, *').css('color', 'black');
            //
            //
            //     template11_2 = template11_2.html();
            //
            //     let opt2 = {
            //         margin: [5, 15],
            //         filename: name + '2.pdf',
            //         html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
            //         jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
            //     };
            //
            //
            //     setTimeout( function (){
            //         html2pdf().set(opt2).from(template11_2).save();
            //     }, 2000);
            //
        // }
        else if (show_view_pdf_div.data('template_number') == 10) { //############# template 10 #############//

            let template10 = $('.js_data_all_pdf div');
            template10.css({'font-size': '9.5pt', 'color': 'black'});
            template10.find('p.mb-2').css('margin-top', '5px');
            template10.find('.div-list1 p').css({'font-size': '8pt'});

            template10.find('.div-list2 .table tr td:nth-child(1)').css('width', '4%');
            template10.find('.div-list2 .table tr td:nth-child(2)').css('width', '30%');
            template10.find('.div-font-small').css({'font-size': '7.5pt', 'margin-top': '5px'});
            template10.find('.div-list4 div').css('font-size', '8.5pt');

            template10 = template10.html();
            opt.margin = 0;

            setTimeout(function () {
                html2pdf().set(opt).from(template10).save();
            }, 3000);

        }


        // Hujjatga tegishli fayllarni zip qilib tortish
        let url = window.location.protocol + "//" + window.location.host + "/contract/file-download";
        let token = $('meta[name="csrf-token"]').attr('content');

        let formData = new FormData();
        formData.append('id', c_id);
        formData.append('_token', token);

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            xhrFields: {responseType: 'blob'},
            success: (response) => {
                let blob = new Blob([response]);
                let link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "files.zip";

                setTimeout(function () {
                    link.click();
                }, 2000);

                console.log('res: ', response);
            },
            error: (response) => {
                console.log('error: ', response)
            }
        });
    });
// }