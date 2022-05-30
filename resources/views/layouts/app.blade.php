<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contract</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/images/etclogo.png') }}" type="image/icon">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/icons-css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/fontawesome-free-6.1/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <style>
        .active {
            color: #fff !important;
            background: #5b4dd9 !important;
        }
    </style>
    @yield('style')
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

            <a href="{{ route('contract.index') }}" class="c-header-toggler c-class-toggler mfs-3" style="margin-top: 12px; color: black;">Contract</a>
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
                            {{-- <a class="dropdown-item d-flex align-items-center js_title2 @if(Request::segment(1) == 'template2') active @endif" href="{{ route('template2')  }}">Contract 2 (ДОГОВОР ПОДРЯДА)</a>--}}
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center js_title3 @if(Request::segment(1) == 'template3') active @endif" href="{{ route('template3') }}">Договор На Уступки</a>
                        </li>
                        <li>
                            {{-- <a class="dropdown-item d-flex align-items-center js_title4 @if(Request::segment(1) == 'template4') active @endif" href="{{ route('template4')  }}">Contract 4 (ДОГОВОР НА АРЕНДУ)</a>--}}
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center js_title5 @if(Request::segment(1) == 'template5') active @endif" href="{{ route('template5') }}">Договор Бюджет</a>
                        </li>
                    </ul>
                </li>

                <li class="c-header-nav-item">
                    <a class="c-header-nav-link @if(Request::segment(1) == 'contract') active @endif" href="{{ route('contract.index') }}" style="color: black; height: 35px;">
                        <i class="far fa-file-alt mr-2"></i> <span>Contracts</span>
                    </a>
                </li>
            </ul>

            <ul class="c-header-nav ml-auto mr-4">
                @php
                    $user = \Auth::user();
                    $user->load('section');
                @endphp

                @if($user->section->rule != 'JURIST')
                    @if(Request::segment(1) == 'template1' || Request::segment(1) == 'template2' || Request::segment(1) == 'template3' ||
                    Request::segment(1) == 'template4' || Request::segment(1) == 'template5' || Request::segment(3) == 'edit')

                        <li class="nav-item d-flex align-content-center" style="height: 39px;">
                            <div class="row js_div_form d-none" style="margin-top: 5px;">
                                @if(Request::segment(1) == 'template3')
                                    <div class="col-md-5">
                                        <select name="number" class="form-control form-control-sm js_tin_number" style="border: 1px solid #7367f0;">
                                            <option value="1">Принимающая сторона</option>
                                            <option value="2">Дебитор</option>
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
                                            <input type="text" name="tin" class="form-control js_tin_input" placeholder="TIN" aria-describedby="button-addon2" style="border: 1px solid #7367f0;">
                                            <div class="input-group-append js_tin_icon" id="button-addon2">
                                                <button class="btn btn-outline-primary waves-effect js_tin_btn" type="button">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </li>

                        <li class="c-header-nav-item mx-md-5 mx-2 nav-item mr-2">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm js_text_edit_btn"><i class="fas fa-pen"></i> edit</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-sm js_text_save_btn d-none"><i class="fas fa-check"></i> save</a>
                            <a href="javascript:void(0);" class="btn btn-secondary btn-sm js_text_cancel_btn d-none"><i class="fas fa-times"></i> cancel</a>
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
                                Users
                            </a>
                        @endif

                        <a class="dropdown-item @if(Request::segment(1) == 'user-profile-show') active @endif" href="{{ route('user.user_profile_show') }}">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-settings') }}"></use>
                            </svg>
                            Settings
                        </a>

                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('/icons/sprites/free.svg#cil-account-logout') }}"></use>
                            </svg>
                            Logout
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

<script src="{{ asset('/js/functionDelete.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>

@yield('script')

</body>
</html>
