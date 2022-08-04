<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Согласование Договоров</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/images/etclogo.png') }}" type="image/icon">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/icons-css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('/fontawesome-free-6.1/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/file-input.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/contract.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract1.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract2.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract3.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract4.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract5.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract6.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract8.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract9.css?'.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/contract7_10_11.css?'.time()) }}">

    @yield('style')

    <style>
        .active {
            color: #fff !important;
            background: #5b4dd9 !important; 
        }
        .btn-outline-primary:hover {
            color: #fff !important;
            background: #5b4dd9 !important;
        }
    </style>
 
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script>

</head>
<body class="c-app">
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">

            @php
                $user = \Auth::user();
                $user->load('section');
            @endphp

            <a href="{{ route('contract.index') }}" class="c-header-toggler mfs-3" style="margin-top: 12px; color: black;">B2B Контракт</a>
            <ul class="c-header-nav">

                <li class="dropdown c-header-nav-item px-1 px-md-3" data-menu="dropdown">
                    <a class="dropdown-toggle btn" href="#" data-toggle="dropdown" style="color: black;">
                        <i class="far fa-file" style="margin-right: 5px;"></i> <span>Шаблоны</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title1 @if(Request::segment(1) == 'template1') active @endif" href="{{ route('template1') }}">Договор Юр. Лица</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title2 @if(Request::segment(1) == 'template2') active @endif" href="{{ route('template2')  }}">Договор Подряда</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title3 @if(Request::segment(1) == 'template3') active @endif" href="{{ route('template3') }}">Договор На Уступки</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title4 @if(Request::segment(1) == 'template4') active @endif" href="{{ route('template4')  }}">Дговор На Аренду</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title6 @if(Request::segment(1) == 'template6') active @endif" href="{{ route('template6') }}">Доп Cогл Аренда Канала</a>
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title5 @if(Request::segment(1) == 'template5') active @endif" href="{{ route('template5') }}">Договор Бюджет 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title8 @if(Request::segment(1) == 'template8') active @endif" href="{{ route('template8') }}">Договор Бюджет 2</a>
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title7 @if(Request::segment(1) == 'template7') active @endif" href="{{ route('template7') }}">Доп Соглашение 1</a>
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title9 @if(Request::segment(1) == 'template9') active @endif" href="{{ route('template9') }}">Договор Поручительства</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title10 @if(Request::segment(1) == 'template10') active @endif" href="{{ route('template10') }}">Доп Соглашение 2</a>
                            </li>
{{--                        @if($user->section->rule == 'ROOT')--}}
                            <li>
                                <a class="dropdown-item d-flex align-items-center js_title11 @if(Request::segment(1) == 'template11') active @endif" href="{{ route('template11') }}">Доп Соглашение 3</a>
                            </li>
{{--                        @endif--}}
                    </ul>
                </li>

                <li class="c-header-nav-item"> 
                    <a class="c-header-nav-link @if(Request::segment(1) == 'contract') active @endif" href="{{ route('contract.index') }}" style="color: black; height: 35px;">
                        <i class="far fa-file-alt mr-2"></i> <span>Документы</span>
                    </a>
                </li>
            </ul>
           @php
               use App\Http\Controllers\ContractController;
               $id = Request::segment(2);
           @endphp

             @if(Request::segment(3) == 'create-pdf' && (ContractController::checkApproved($id) == 2))
                <ul class="c-header-nav ml-auto mr-5">
                    <li class="c-header-nav-item">
                        <a href="javascript:void(0)" class="js_create_pdf_btn btn btn-outline-success">
                            <i class="fa-solid fa-download mr-50"></i> Контракты сохранены
                        </a>
                    </li>
                </ul>
             @endif


            @if(Request::segment(3) == "edit")
                <ul class="c-header-nav ml-auto mr-5">
                    <li class="c-header-nav-item">
                        <p class="text-primary mb-0">Редактировать контракты</p>
                    </li>
                </ul>
            @endif

            <ul class="c-header-nav ml-auto mr-4">


                @if($user->section->rule != 'JURIST')
                    @if(Request::segment(1) == 'template1' || Request::segment(1) == 'template2' || Request::segment(1) == 'template3' ||
                        Request::segment(1) == 'template4' || Request::segment(1) == 'template5' || Request::segment(1) == 'template6' ||
                        Request::segment(1) == 'template7' || Request::segment(1) == 'template8' || Request::segment(1) == 'template9' ||
                        Request::segment(1) == 'template10' || Request::segment(1) == 'template11' || Request::segment(3) == 'edit')

                        @if(Request::segment(1) != 'template6' and Request::segment(1) != 'template7')
                            <li class="nav-item d-flex align-content-center" style="height: 39px;">
                                <div class="row js_div_form d-none" style="margin-top: 5px;">
                                    @if(Request::segment(1) == 'template3' || Request::segment(1) == 'template9')
                                        <div class="col-md-5">
                                            <select name="number" class="form-control form-control-sm js_tin_number" style="border: 1px solid #7367f0;">
                                                @if(Request::segment(1) == 'template3')
                                                    <option value="1">Принимающая сторона</option>
                                                    <option value="2">Дебитор</option>
                                                @elseif(Request::segment(1) == 'template9')
                                                    <option value="1">один</option>
                                                    <option value="2">два</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-7 pl-0">
                                            <div class="input-group input-group-sm">
                                                <input type="text" name="tin" class="form-control js_tin_input" placeholder="TIN" aria-describedby="button-addon2" style="border: 1px solid #7367f0;">
                                                <div class="input-group-append js_tin_icon" id="button-addon2">
                                                    <button class="btn btn-outline-primary waves-effect js_tin_btn" type="button">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-md-12 pl-0">
                                            <div class="input-group input-group-sm">
                                                <input type="hidden" name="number" value="1" class="js_tin_number"/>
                                                <input type="text" name="tin" class="form-control js_tin_input" placeholder="ИНН" aria-describedby="button-addon2" style="border: 1px solid #7367f0;">
                                                <div class="input-group-append js_tin_icon" id="button-addon2">
                                                    <button class="btn btn-outline-primary waves-effect js_tin_btn" type="button">Отправлять</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        @endif

                        <li class="c-header-nav-item mx-md-5 mx-2 nav-item mr-2">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm js_text_edit_btn"><i class="fas fa-pen"></i> Редактировать</a>
                            <a href="javascript:void(0);" class="btn btn-secondary btn-sm js_text_cancel_btn d-none"><i class="fas fa-times"></i> Отмена</a>
                        </li>

                    @endif

                @endif

                <li class="c-header-nav-item dropdown">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-user') }}"></use>
                        </svg>
                        <div class="ml-2">{{ $user->full_name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0 pb-0">

                        @if($user->section->rule == 'ROOT' || $user->section->rule == 'ADMIN_USER')
                            <a class="dropdown-item @if(Request::segment(1) == 'user') active @endif" href="{{ route('user.index') }}">
                                <svg class="c-icon mr-2">
                                    <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-user') }}"></use>
                                </svg>
                                Пользователи
                            </a>
                        @endif

                        <a class="dropdown-item @if(Request::segment(1) == 'user-profile-show') active @endif" href="{{ route('user.user_profile_show') }}">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-settings') }}"></use>
                            </svg>
                            Настройки
                        </a>

                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-account-logout') }}"></use>
                            </svg>
                            Выйти
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
        </header>
        <div class="c-body">
            <main class="c-main p-3">
                <div class="container-fluid p-0">

                    @yield('content')

                </div>
            </main>

        </div>
    </div>


@include('layouts.deleteModal')


<script src="{{ asset('/js/jQurey.js') }}"></script>
<script src="{{ asset('/js/coreui.bundle.min.js') }}"></script>
<!--[if IE]><!-->

<script src="{{ asset('/js/svgxuse.min.js') }}"></script>
<!--<![endif]-->

<script src="{{ asset('/js/coreui-utils.js') }}"></script>
<script src="{{ asset('/js/datatable.js') }}"></script>

<script src="{{ asset('select2/js/select2.js') }}"></script>
{{-- number format --}}
<script src="{{ asset('/js/numeral.js') }}"></script>
<script src="{{ asset('/js/form-validation.js') }}"></script>

{{-- file uploader --}}
<script src="{{ asset('js/buffer.js') }}"></script>
<script src="{{ asset('js/piexif.js') }}"></script>
<script src="{{ asset('js/file-input.js') }}"></script>

<script src="{{ asset('js/html2pdf.bundle.min.js') }}"></script>
<script src="{{ asset('/js/functionDelete.js') }}"></script>
<script src="{{ asset('/js/functions.js?'.time()) }}"></script>

<script src="{{ asset('js/template_function.js?'.time()) }}"></script>

@yield('script')

    <script>
        $(document).ready(function() {
            let id = '{{ Request::segment(2) }}';

            if(id)
                $(document).on('click', '.js_create_pdf_btn', function () {
                    window.scrollTo(0, 0);

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
                            'font-size': '7.85pt',
                            'color': 'black!important;',
                            'width': '650px!important;',
                        });

                        template1.find('.row').css({'font-size': '8pt'});
                        template1.find('p').css({'font-size': '8pt'});
                        template1.find('.table tr th, .table tr td').css({
                            'border': '0.5pt solid darkgray',
                            'padding': '5px',
                            'font-size': '7.95pt',
                            'color': 'black!important'
                        });
                        template1 = template1.html();

                        let opt = {
                            margin: [5, 0, 5, 1],
                            filename: name + '.pdf',
                            html2canvas: {scale: 4, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
                        };

                        html2pdf().set(opt).from(template1).save();

                    }
                    else if (show_view_pdf_div.data('template_number') == 2) { //############# template 2 #############//

                        let template2 = $('.js_data_all_pdf div');
                        template2.css({'font-size': '10pt', 'color': 'black!important;'});

                        template2.find('p').css({'font-size': '9.8pt'});
                        template2.find('.table tr th, .table tr td').css({
                            'border': '0.2pt solid darkgray',
                            'padding': '5px',
                            'font-size': '10pt',
                            'color': 'black!important'
                        });
                        template2 = template2.html();
                        opt.margin = [5, 2, 5, 3];

                        html2pdf().set(opt).from(template2).save();
                    } else if (show_view_pdf_div.data('template_number') == 3) { //############# template 3 #############//

                        let template3 = $('.js_data_all_pdf div');
                        template3.css({'font-size': '11pt', 'color': 'black!important;'});
                        template3.find('h4').css({
                            'font-size': '11.2pt!important'
                        });
                        template3 = template3.html();
                        opt.margin = [5, 2, 5, 3];
                        html2pdf().set(opt).from(template3).save();
                    } else if (show_view_pdf_div.data('template_number') == 4) { //############# template 4 #############//

                        // vertical lists
                        let template4_1 = $('.js_data_all_pdf div');
                        template4_1.css({'font-size': '10.5pt', 'color': 'black!important;'});
                        template4_1.find('h4').css('font-size', '10.7pt');

                        template4_1.find('.horizontal-list').addClass('d-none');
                        template4_1 = template4_1.html();

                        let opt1 = {
                            margin: [5, 7.5, 5, 7.5],
                            filename: name + '1.pdf',
                            html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
                        };

                        html2pdf().set(opt1).from(template4_1).save();

                        $('.horizontal-list').removeClass('d-none');

                        // horizontal list
                        let template4_2 = $('.horizontal-list');
                        template4_2.css({'font-size': '10.5pt', 'color': 'black!important;'});

                        template4_2.find('.table').css('margin-top', '20px');
                        template4_2.find('p, span').css('color', 'black');
                        template4_2.find('.table tr th, .table tr td').css({
                            'color': 'black',
                            'border': '0.1pt solid darkgray',
                            'padding': '5px'
                        });

                        template4_2 = template4_2.html();

                        let opt2 = {
                            margin: [5, 7.5],
                            filename: name + '2.pdf',
                            html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
                        };

                        html2pdf().set(opt2).from(template4_2).save();

                    } // ./4
                    else if (show_view_pdf_div.data('template_number') == 5) { //############# template 5 Бюджет 1 #############//

                        let template5_1 = $('.js_data_all_pdf div');
                        template5_1.css({'font-size': '7.7pt', 'color': 'black!important;'});

                        template5_1.find('.table tr th, .table tr td').css({
                            'border': '0.1pt solid darkgray',
                            'padding': '5px',
                            'font-size': '7.7pt',
                            'color': 'black!important'
                        });
                        template5_1.find('.horizontal-list').addClass('d-none');
                        template5_1 = template5_1.html();

                        let opt1 = {
                            margin: [5, 0, 5, 2],
                            filename: name + '1.pdf',
                            html2canvas: {scale: 4, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
                        };

                        html2pdf().set(opt1).from(template5_1).save();

                        $('.horizontal-list').removeClass('d-none');

                        // horizontal list
                        let template5_2 = $('.horizontal-list');
                        template5_2.css({'font-size': '7.7pt', 'color': 'black !important;'});

                        template5_2.find('.table').css('margin-top', '0');
                        template5_2.find('p, span, *').css('color', 'black');
                        template5_2.find('.table tr th, .table tr td').css({
                            'padding': '2px 3px',
                            'color': 'black',
                            'border': '0.1pt solid darkgray'
                        });

                        template5_2 = template5_2.html();

                        let opt2 = {
                            margin: [5, 15],
                            filename: name + '2.pdf',
                            html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
                        };

                        html2pdf().set(opt2).from(template5_2).save();
                    } else if (show_view_pdf_div.data('template_number') == 6) { //############# template 6 #############//

                        let template6 = $('.js_data_all_pdf div');
                        template6.css({
                            'font-size': '10.5pt',
                            'color': 'black!important',
                            'line-height': '1.2!important'
                        });

                        template6.find('.table tr th, .table tr td').css({
                            'border': '1px solid darkgray',
                            'padding': '8px',
                            'font-size': '10.5pt',
                            'color': 'black!important',
                            'vertical-align': 'middle',
                            'text-align': 'center'
                        });
                        template6 = template6.html();
                        opt.margin = [5, 2, 5, 3];
                        html2pdf().set(opt).from(template6).save();
                    } else if ((show_view_pdf_div.data('template_number') == 7) || (show_view_pdf_div.data('template_number') == 10) || (show_view_pdf_div.data('template_number') == 11)) { //############# template 7 or 10 or 11 #############//

                        let template7_10_11 = $('.js_data_all_pdf div');
                        template7_10_11.css({'font-size': '9.5pt', 'color': 'black!important;'});
                        template7_10_11.find('p.mb-2').css('margin-top', '5px');
                        template7_10_11.find('.div-list1 p').css({'font-size': '8pt'});


                        template7_10_11.find('.table tr th, .table tr td').css({
                            'border': '0.1pt solid darkgray',
                            'padding': '3px 5px',
                            'font-size': '9pt',
                            'color': 'black!important',
                            'vertical-align': 'middle',
                        });
                        template7_10_11.find('.div-list2 .table tr td:nth-child(1)').css('width', '4%');
                        template7_10_11.find('.div-list2 .table tr td:nth-child(2)').css('width', '30%');
                        template7_10_11.find('.div-font-small').css({'font-size': '7.5pt', 'margin-top': '5px'});
                        template7_10_11.find('.div-list4 div').css('font-size', '8.5pt');

                        template7_10_11.find('.horizontal-list').addClass('d-none');

                        template7_10_11 = template7_10_11.html();

                        opt.margin = [3, 2, 3, 3];

                        html2pdf().set(opt).from(template7_10_11).save();

                        $('.horizontal-list').removeClass('d-none');

                        // horizontal list
                        let template11_2 = $('.horizontal-list');
                        template11_2.css({'font-size': '7.7pt', 'color': 'black !important;'});

                        template11_2.find('.table').css('margin-top', '0');
                        template11_2.find('p, span, *').css('color', 'black');
                        template11_2.find('.table tr th, .table tr td').css({
                            'padding': '2px 3px',
                            'color': 'black',
                            'border': '0.1pt solid darkgray'
                        });

                        template11_2 = template11_2.html();

                        let opt2 = {
                            margin: [5, 15],
                            filename: name + '2.pdf',
                            html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
                        };

                        html2pdf().set(opt2).from(template11_2).save();

                        console.log('7 10 11')
                    }
                    else if (show_view_pdf_div.data('template_number') == 8) { //############# template 8 Бюджет 2 #############//

                        let template8_1 = $('.js_data_all_pdf div');
                        template8_1.css({'font-size': '7.65pt', 'color': 'black!important;'});

                        template8_1.find('.table tr th, .table tr td').css({
                            'border': '0.1pt solid darkgray',
                            'padding': '5px',
                            'font-size': '7.65pt',
                            'color': 'black!important'
                        });
                        template8_1.find('.horizontal-list').addClass('d-none');
                        template8_1 = template8_1.html();

                        let opt1 = {
                            margin: [3, 0, 3, 2],
                            filename: name + '1.pdf',
                            html2canvas: {scale: 4, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'portrait'},
                        };

                        html2pdf().set(opt1).from(template8_1).save();

                        $('.horizontal-list').removeClass('d-none');

                        // horizontal list
                        let template8_2 = $('.horizontal-list');
                        template8_2.css({'font-size': '7.7pt', 'color': 'black !important;'});

                        template8_2.find('.table').css('margin-top', '0');
                        template8_2.find('p, span, *').css('color', 'black');
                        template8_2.find('.table tr th, .table tr td').css({
                            'padding': '2px 3px',
                            'color': 'black',
                            'border': '0.1pt solid darkgray'
                        });

                        template8_2 = template8_2.html();

                        let opt2 = {
                            margin: [5, 15],
                            filename: name + '2.pdf',
                            html2canvas: {scale: 3, logging: true, dpi: 96, letterRendering: true},
                            jsPDF: {unit: 'mm', formant: 'a4', orientation: 'landscape'},
                        };

                        html2pdf().set(opt2).from(template8_2).save();
                    } else if (show_view_pdf_div.data('template_number') == 9) { //############# template 9 #############//

                        let template9 = $('.js_data_all_pdf div');
                        template9.css({'font-size': '12pt', 'color': 'black!important;'});

                        template9 = template9.html();
                        opt.margin = [3, 5, 3, 5];

                        html2pdf().set(opt).from(template9).save();
                    } else if (show_view_pdf_div.data('template_number') == 10) { //############# template 11 #############//

                        let template10 = $('.js_data_all_pdf div');
                        template10.css({'font-size': '9.5pt', 'color': 'black!important;'});
                        template10.find('p.mb-2').css('margin-top', '5px');

                        template10.find('.table tr th, .table tr td').css({
                            'border': '0.1pt solid darkgray',
                            'padding': '3px 5px',
                            'font-size': '9pt',
                            'color': 'black!important',
                            'vertical-align': 'middle',
                        });
                        template10.find('.div-list2 .table tr td:nth-child(1)').css('width', '4%');
                        template10.find('.div-list2 .table tr td:nth-child(2)').css('width', '30%');
                        template10.find('.div-font-small').css({'font-size': '7.5pt', 'margin-top': '5px'});
                        template10.find('.div-list4 div').css('font-size', '8.5pt');
                        template10 = template10.html();

                        opt.margin = [3, 2, 3, 3];

                        html2pdf().set(opt).from(template10).save();

                        console.log('11')
                    }


                    // Hujjatga tegishli fayllarni zip qilib tortish
                    let url = window.location.protocol + "//" + window.location.host + "/contract/file-download";
                    let token = $('meta[name="csrf-token"]').attr('content');

                    let formData = new FormData();
                    formData.append('id', id);
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
                            link.click();
                            console.log('res: ', response);
                        },
                        error: (response) => {
                            console.log('error: ', response)
                        }
                    });
                });

        });
    </script>
</body>
</html>
