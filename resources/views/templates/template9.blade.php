@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract9.css?'.time()) }}">
@endsection

@section('content')

    <section class="app-user-list js_data_all js_data_all_pdf" data-template_number="9">

        <div class="contract9" id="forstyle">

            <!-- 1 - list -->
            <div class="card contract-text">
                <h5 class="text-center text-bold mt-4">
                    <span class="js_title">ДОГОВОР ПОРУЧИТЕЛЬСТВА</span> № <span class="text_edit js_number">1682</span> <br/>
                </h5>
                <div class="d-flex mb-1 justify-content-between mt-2 mb-3">
                    <span class="text_edit">г. Ташкент</span>
                    <div>
                        «<span class="text_edit">24</span>»
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
                        <span class="text_edit js_span_date_month1">Май</span>
                        <span class="text_edit">2022</span>г.<br/>
                    </div>
                </div>

                <div>
                    &emsp;&emsp;&emsp;<span class="text_edit text-bold">СП OOO «Ist Теlеkom»</span>, именуемое в дальнейшем <b>«Оператор»</b>,
                    в лице Генерального директора Lee Baek Hee, действующего на основании Устава, с одной стороны, и
                    <span class="text_edit text-bold js_company_name">"DIABAZ KOMPOZIT" MCHJ QK</span> именуемый в дальнейшем <b>«Абонент»</b>, в лице
                    <span class="text_edit">директора Усманова Ж.</span>, действующего на основании <span class="text_edit js_ustav">Устава</span>,
                    с другой стороны, и <span class="text_edit text-bold js_company_name2">OOO “DIABAZ COMPOZIT GROUP”</span> именуемый в дальнейшем <b>«Поручитель»</b>,
                    в лице <span class="text_edit">директора Алибаева Х.И.</span>, действующего на основании <span class="text_edit js_ustav_html">Устава</span>,
                    с третьей стороны, вместе именуемые <b>«Стороны»</b>, заключили настоящий Договор о нижеследующем.
                    <br/>

                    <h5 class="text-bold mt-3 mb-2">1.&nbsp; ПРЕДМЕТ ДОГОВОРА</h5>
                    <p class="ml-4">
                        1.1.&emsp; В соответствии с письменным заявлением Абонента (прилагается), на условиях настоящего Договора, Поручитель обязуется отвечать перед Оператором в том же
                        объёме, что и Абонент за исполнение обязательств Абонента по своевременной оплате счетов за предоставляемые телекоммуникационные услуги, выставляемых Оператором в
                        соответствии с договором на оказание телекоммуникационных услуг <span class="text_edit js_number">13А01№0855/2021</span> от <span class="text_edit js_date">10.02.2021</span>г.,
                        заключенным между Оператором и Абонентом.
                    </p>

                    <h5 class="text-bold mt-2 mb-2">2.&nbsp; ПРАВА И ОБЯЗАННОСТИ СТОРОН</h5>
                    <p class="ml-4">
                        2.1.&emsp; Оператор выставляет счет Абоненту, и в случае неплатежеспособности Абонента этот счёт передается самим Абонентом, а в случаях уклонения Абонента
                        от выполнения  этих действий - Оператором, Поручителю для осуществления платежа. Поручитель обязуется в установленные для Абонента Договором об оказании
                        телекоммуникационных услуг сроки оплатить выставленный Оператором счет. <br/>
                        2.2.&emsp;	Основанием для оплаты Поручителем счетов за Абонента является настоящий Договор. <br/>
                        2.3.&emsp;	В случае исполнения Поручителем обязательств Абонента перед Оператором по Договору, Поручитель вправе требовать от Абонента  возмещения всех выплаченных
                        Оператору сумм. Поручитель также вправе требовать от Абонента уплаты сумм пени, штрафов, выплаченных Оператору, а также возмещения иных убытков, понесенных в связи
                        с ответственностью по платежам Абонента. При этом Оператор не несет ответственности за взаиморасчеты между Поручителем и Абонентом.
                    </p>

                    <h5 class="text-bold mt-2 mb-2">3.&nbsp; ОТВЕТСТВЕННОСТЬ СТОРОН</h5>
                    <p class="ml-4">
                        3.1.&emsp; Поручитель отвечает перед Оператором по обязательствам Абонента, в полном объеме, включая уплату пени, штрафов, возмещение судебных издержек по взысканию
                        долга и других убытков Оператора, вызванных неисполнением или ненадлежащим исполнением своих обязательства Абонентом. <br/>
                        3.2.&emsp; За невыполнение или ненадлежащее выполнение своих договорных обязательств Стороны несут ответственность, предусмотренную вышеуказанным
                        Договором об оказании телекоммуникационных услуг.
                    </p>

                    <h5 class="text-bold mt-2 mb-2">4.&nbsp; РАЗРЕШЕНИЕ СПОРОВ</h5>
                    <p class="ml-4">
                        4.1.&emsp; Стороны прикладывают все усилия, чтобы устранить возникающие разногласия исключительно путем согласительных процедур. При невозможности устранения
                        разногласий путем переговоров, Стороны обращаются в суд, в  установленном порядке в законодательстве Республики Узбекистан.
                    </p>

                </div>
            </div><!-- ./card -->


            <div class="html2pdf__page-break"></div>


            <!-- 2 - list -->
            <div class="card contract-text">

                    <h5 class="text-bold mb-1">5.&nbsp; ДРУГИЕ УСЛОВИЯ ДОГОВОРА</h5>
                    <p class="ml-4">
                        5.1.&emsp; Все изменения и дополнения к настоящему Договору действительны только в случае, если они совершены в письменной форме и подписаны Сторонами. <br>
                        5.2.&emsp; Настоящий Договор составлен в 3-х экземплярах, которые идентичны и имеют одинаковую юридическую силу, по одному для каждой стороны. С момента его подписания всеми
                        Сторонами настоящий Договор прилагается к Договору об оказании телекоммуникационных услуг <span class="text_edit js_number2">13А01№0855/2021</span>
                        от <span class="text_edit">10.02.2021</span>г., и составляет с ним одно целое. <br/>
                        5.3.&emsp; Договор вступает в силу с момента его подписания и будет действовать в течении всего срока действия Договора
                        <span class="js_number2 text_edit">13А01№0855/2021</span> от <span class="text_edit">10.02.2021</span>г., на предоставление телекоммуникационных услуг юридическим лицам. <br/>
                        5.4.&emsp; Настоящий Договор может быть расторгнут досрочно по инициативе одной из Сторон, оповестившей остальные Стороны о своем намерении расторгнуть его не менее
                        чем за 10 дней до предполагаемой даты расторжения Договора. <br/>
                        5.5.&emsp; Поручительство по настоящему Договору может быть также прекращено по иным основаниям, предусмотренным действующим законодательством. <br/>
                        5.6.&emsp; Во всем остальном, что не урегулировано условиями настоящего договора, стороны руководствуются действующим законодательством Республики Узбекистан. <br/>
                    </p>

                    <h5 class="text-bold mt-2 mb-3">6.&nbsp; ЮРИДИЧЕСКИЕ АДРЕСА СТОРОН</h5>

                    <div>
                        <p class="text-bold mb-1">ОПЕРАТОР: СП OOO «Ist Теlеkom»</p>
                        <p class="mb-1">100060, г. Ташкент, Мирабадский район, ул. Т. Шевченко, д.21</p>
                        <p class="mb-1">Телефон: 78 150 00 00,&emsp;Факс: 78 150 01 02 </p>
                        <p class="mb-1">Р/счет: <b>20214000404281148001</b>&emsp;Банк: <b>UZ КDВ BANK</b> МФО: <b>00842</b></p>
                        <p class="mb-1">ИНН: <b>204663354</b>&emsp;ОКЭД: <b>61100</b></p>

                        <div class="text-right">
                            <p class="mb-0 text_edit">Генеральный директор</p>
                            <p class="text-bold mb-1 text_edit">Lee Baek Hee</p>
                            <p class="mb-0">М.П._________________</p>
                            <p class="ml-5 mb-0">(подпись)</p>
                        </div>
                    </div>



                    {{-- 2 --}}
                    <div class="js_tin_div1">
                        <p class="text-bold mb-1">АБОНЕНТ: <span class="text_edit js_name js_company_name_html">"DIABAZ KOMPOZIT" MCHJ QK,</span></p>
                        <p class="mb-1 text_edit js_address">130100, Джизакская область, Фариш, Эгизбулок КФЙ</p>
                        <p class="mb-1">Телефон: <span class="text_edit">998901203535</span></p>
                        <p class="mb-1">Р/счет: <span class="text_edit text-bold js_account">20214000305084432001</span></p>
                        <p class="mb-1">Банк: <span class="text_edit text-bold">ЖИЗЗАХ Ш., "АСАКА" ДАТ БАНКИНИНГ ЖИЗЗАХ ВИЛОЯТ ФИЛИАЛИ</span></p>
                        <p class="mb-1">
                            МФО: <span class="text_edit text-bold js_mfo">00140</span>&emsp;
                            ИНН:  <span class="text_edit text-bold js_tin">306458310</span>&emsp;
                            ОКЭД:  ______
                        </p>

                        <div class="text-right">
                            <p class="mb-0"><span class="text_edit js_director_title">Директор</span></p>
                            <p class="text-bold mb-1"><span class="text_edit js_director_full_name">Усманов Ж.</span></p>
                            <p class="mb-0">М.П._________________</p>
                            <p class="ml-5 mb-0">(подпись)</p>
                        </div>
                    </div>
                

                    {{-- 3 --}}
                    <div class="js_tin_div2">
                        <p class="text-bold mb-1">ПОРУЧИТЕЛЬ: <span class="text_edit js_name js_company_name2_html">OOO “DIABAZ COMPOZIT GROUP”</span></p>
                        <p class="mb-1 js_address text_edit">130100, Джизакская область, Фаришский район,  Эгизбулок, МСГ Эгизбулок</p>
                        <p class="mb-1">Телефон: <span class="text_edit text-bold">998 90 120 35 35</span></p>
                        <p class="mb-1">Р/счет: <span class="text_edit text-bold js_account">20208000600302909001</span></p>
                        <p class="mb-1">Банк:   <span class="js_bank text_edit text-bold">в Ташкентском Городском ф-ле банка"АСАКА"</span></p>
                        <p class="mb-1">
                            МФО: <span class="text_edit text-bold js_mfo">00416</span>&emsp;
                            ИНН: <span class="text_edit text-bold js_tin">204663354</span>&emsp;
                            ОКЭД: <span class="text_edit text-bold js_oked">20600</span>
                        </p>

                        <div class="text-right">
                            <p class="mb-0 js_director_title_html">Директор</p>
                            <p class="text-bold mb-1"><span class="text_edit js_director_full_name_html">Алибаев Х.И.</span></p>
                            <p class="mb-0">М.П._________________</p>
                            <p class="ml-5 mb-0">(подпись)</p>
                        </div>
                    </div>
                

            </div><!-- ./card -->

        </div><!-- ./contract3 -->

    </section>


    @include('templates.form_file_and_contract_save')


@endsection


@section('script')

    <script src="{{ asset('js/template_function.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(document).on('submit', '.js_file_form_and_save_contract', function(e) {
                e.preventDefault();

                afer_save_add_d_none_template()

                let form    = $(this);
                let number  = $('.js_number').html();
                let title   = $('.js_title1').html();
                let data    = $('.js_data_all').html();
                let template_number = $('.js_data_all_pdf').data('template_number');

                form.find('.js_hidden_number').val(number);
                form.find('.js_hidden_title').val(title);
                form.find('.js_hidden_data').val(data);
                form.find('.js_hidden_template_class').val(template_number);

                $.ajax({
                    url: '{{ route('contract.store') }}',
                    type: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    // cache: false,
                    processData: false,
                    success: (response) => {
                        // console.log('res: ', response);
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
