@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">

@endsection


@section('content')

    <section class="app-user-list">

        <!-- 1 - list -->
        <div class="card contract-text">
            <h4 class="text-center mt-1"> ДОГОВОР ПОДРЯДА № <span class="text_edit" contenteditable="false">900-1195</span></h4>
            <div class="d-flex justify-content-between">
                <span>г. Ташкент</span>
                <div>
                    «<span class="text_edit" contenteditable="false">17</span>»
                    <select name="month1" class="js_select_data_month1 d-none">
                        <option>Январь</option>
                        <option>Февраль</option>
                        <option>Март</option>
                        <option>Апрель</option>
                        <option>Май</option>
                        <option>Июнь</option>
                        <option>Июль</option>
                        <option>Август</option>
                        <option>Сентябрь</option>
                        <option>Октябрь</option>
                        <option>Ноябрь</option>
                        <option>Ноябрь</option>
                        <option>декабря</option>
                    </select>
                    <span class="text_edit js_span_date_month1">мая</span>
                    <span class="text_edit" contenteditable="false">2021</span>г. <br>
                </div>
            </div>
            <div>

                <span class="text_edit"><b>ООО "Food City Tashkent"</b></span> именуемое в дальнейшем «Заказчик», в лице <span class="text_edit">Директора Самигова Д.</span>,
                действующего на основании ___________________, с одной стороны, и <b>СП ООО «Ist Telekom»</b>, именуемое в дальнейшем «Подрядчик», в лице Генерального директора
                <b>Lee Baek Hee,</b> действующего на основании устава, с другой стороны, далее именуемые «Стороны», заключили настоящий договор о нижеследующем: <br>

                <p class="text-center text-bold">1. ПРЕДМЕТ ДОГОВОРА</p>
                1.1. Заказчик поручает и оплачивает, а Подрядчик выполняет работы по организации новой абонентской линии связи до объекта Заказчика по адресу: Ташкентская область,
                Уртачирчикский район, массив Ахунбабаева, поселок Кумовул, согласно рабочему проекту, в объёмах, определенных в Протоколе согласования единичных расценок
                (Приложение № 1) к договору. <br>
                1.2. Оборудование и кабельная продукция являются собственностью Подрядчика. <br>
                1.3. Срок выполнения работ с момента подписания договора и поступления предоплаты на расчетный счет Подрядчика, согласно п.5.1., а также получения
                разрешительных документов от АК «Узбектелеком» 45 рабочих дней. <br>

            </div>
            <i class="i-number">1</i>
        </div>

        <!-- 2 - list -->
        <div class="card contract-text">
            <div class="inn js_tin_div2">
                <p><b>Дебитор:</b></p>
                <p><span class="text_edit js_name" contenteditable="false"><b>ООО «NOWADAY»</b></span></p>
                <p><span class="text_edit js_address" contenteditable="false">100060, г.Ташкент, Мирабадский р-н, ул. Тарас Шевченко д.36</span></p>
                <p>Р/счет: <span class="text_edit js_account" contenteditable="false">20208000600302909001</span></p>
                <p>Банк: <span class="text_edit js_bank" contenteditable="false">в Юнусабадский ф-л, АО «Ziraat Bank Uzbekistan»</span></p>
                <p>
                    МФО: <span class="text_edit js_mfo" contenteditable="false">01138</span>
                    ИНН: <span class="text_edit js_tin" contenteditable="false">302888143</span>
                    ОКЭД: <span class="text_edit js_oked" contenteditable="false">47712</span>
                </p>
                <p>РКННДС: _______________________</p>
                <p>Телефон: <span class="text_edit js_phone" contenteditable="false">+998951424451</span></p>

                <p><span class="text_edit js_director" contenteditable="false">Директор</span></p>
                <p><span class="text_edit" contenteditable="false">Ахмедов Ж.А</span></p>
                <p>_________________________________</p>
                <p>М.П.</p>
            </div>


            <div class="inn">
                <p><b>Кредитор:</b></p>

                <p><b>СП ООО «Ist Telekom»</b></p>
                <p>100060, г. Ташкент, Мирабадский район, ул. Т. Шевченко, д.21</p>
                <p>Телефон: 78-150 00 82 Факс: 78-150 01 02</p>
                <p>Р/счет: 20214000404281148001</p>
                <p>Банк АО "КДБ Банк Узбекистан"</p>
                <p>МФО: 00842 ИНН: 204663354 ОКЭД: 61100</p>
                <p>Регистрационный код: 326010005625</p>

                <p>Генеральный директор</p>
                <p>Lee Baek Hee</p>
                <p>_________________________________</p>
                <p>М.П.</p>

            </div>

            <i class="i-number">2</i>
        </div><!-- ./card -->

    </section>

@endsection


@section('script')

    <script src="{{ asset('js/template_function.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.js_text_save_btn', function (e) {
                e.preventDefault();

                let token = $('meta[name="csrf-token"]').attr('content');
                let number = $('.js_number').html()
                let title = $('.js_title').html()
                let data = $('.js_data_all').html()

                $.ajax({
                    url: '{{ route('templates.store') }}',
                    type: 'POST',
                    data: { '_token': token, 'number': number, 'title': title, 'data': data },
                    dataType: 'JSON',
                    success: (response) => {
                        // console.log('res: ', response)
                        window.location.href = window.location.protocol + "//" + window.location.host + "/contract/";
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })
            });

        });

    </script>
@endsection
