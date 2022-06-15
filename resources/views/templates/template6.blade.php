@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract6.css?'.time()) }}">
@endsection

@section('content')

    <section class="app-user-list js_data_all js_data_all_pdf">

        <div class="contract6">

            <!-- 1 - list -->
            <div class="card contract-text">
                <h4 class="text-center">Дополнительное соглашение №<span class="text_edit js_number_n">5</span> <br/>
                    к договору <span class="text_edit js_number">19А01№0498/2019</span>г от
                    «<span class="text_edit js_date_day" contenteditable="false">21</span>»
                    <select name="month1" class="js_date_month js_select_data_month1 d-none">
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
                    <span class="text_edit js_span_date_month1">декабря</span>
                    <span class="text_edit js_date_year">2019</span>г.
                </h4>

                <div class="d-flex justify-content-between">
                    <span>г. Ташкент</span>
                    <div>
                        «<span class="text_edit js_date_day">_____</span>»
                        <span class="text_edit js_span_date_month">________</span>
                        <span class="text_edit js_date_year">2021</span>г. <br>
                    </div>
                </div>
                <div>
                    <b>СП ООО «Ist Telekom»</b>, именуемое в дальнейшем <b>«Оператор»</b>, действующее на основании
                    Лицензий: Серия АА №0008087 от 31.03.2020г.,
                    Серия АА №0008088 от 31.03.2020г., Серия АА №0008089 от 31.03.2020г., Серия АА №0008090 от
                    31.03.2020г.., в лице Генерального
                    <span class="text_edit">директора</span> <span class="text_edit text-bold">Lee Baek Hee</span>,
                    действующей на основании <span class="text_edit">Устава</span>,, с одной стороны,
                    и <span class="text_edit text-bold">Сурхондарё вилоят фермер, дехкон хужаликлари ва томорка ер эгалари кенгаши</span>,
                    именуемое в дальнейшем <b>«Абонент»</b>, в лице
                    <span class="text_edit">председателя областного совета  Бобокулова У.</span>, действующего на
                    основании <span class="text_edit">устава</span>, с другой стороны, вместе именуемые «Стороны»,
                    пришли к соглашению о нижеследующем:<br/>
                    1. Признать утратившими юридическую силу Приложения № 1,2,3 к дополнительному соглашению №4 от
                    «<span class="js_date_day_static">11</span>»
                    <span class="js_date_month_static">июня</span>
                    <span class="js_date_year_static">2021</span>г
                    договору <span class="js_number2">19А01№0498/2019</span> г
                    от «<span class="js_date_day_static">09</span>» <span class="js_date_month_static">декабря</span>
                    <span class="js_date_year_static">2019</span>г.
                    <br>
                    2. Принять Приложения №1,2,3 к настоящему дополнительному соглашению №<span
                            class="js_number_№_static">5</span> от «___» ________ <span class="text_edit">2022</span> г.
                    в следующей редакции (прилагается). <br/>
                    3. Остальные пункты договора сохраняют свою силу в прежней редакции. <br/>
                    4. Дополнительное соглашение №<span class="js_number_№_static">5</span> является неотъемлемой частью
                    договора <span class="js_number2">19А01№0498/2019</span> г
                    от «<span class="js_date_day_static">09</span>» <span class="js_date_month_static">декабря</span>
                    <span class="js_date_year_static">2019</span>г.
                    и вступает в силу с момента его подписания.
                    <br>

                    <div class="d-flex justify-content-around mt-5">
                        <div class="text-center">
                            <p class="text-bold">
                                ОПЕРАТОР: <br>
                                Генеральный директор <br>
                                Lee Baek Hee
                            </p>
                            <p class="text-bold">_________________</p>
                            <p class="text-bold">М. П.</p>
                        </div>
                        <div class="text-center">
                            <p>
                                <span class="text-bold">АБОНЕНТ:</span> <br>
                                <span class="text_edit" contenteditable="false">Председатель областного совета</span>
                                <br>
                                <span class="text-bold text_edit" contenteditable="false">Бобокулов  У.</span>
                            </p>
                            <p class="text-bold">_________________</p>
                            <p class="text-bold">М. П.</p>
                        </div>
                    </div>
                </div>
            </div><!-- ./card -->


            <!-- 2 - list -->
            <div class="card contract-text">

                <div class="text-right">
                    Приложение №<span class="js_number_№_static">1</span> <br/>
                    к дополнительному соглашению «<span class="js_date_day_static">_____</span>»
                    <span class="js_span_date_month_html_static">________</span>
                    <span class="js_date_year_static">2022</span>г.
                </div>

                <div class="text-right">
                    <span class="js_number2">19А01№0498/2019</span>г от
                    «<span class="js_date_day">09</span>»
                    <span class="js_date_month_static">декабря</span>
                    <span class="js_date_year_static">2019</span>г.
                </div>
                <div>

                    <p class="text-center text-bold mt-2 mb-0">Перечень сведений и телекоммуникационных средств,</p>
                    <p class="text-center text-bold">используемых для подключения Абонента к сети СП OOO «Ist Теlеkom»</p>

                    <table class="table mb-0">
                        <tr>
                            <td>1.</td>
                            <td>Наименование услуг:</td>
                            <td>
                                <ul type="circle">
                                    <li class="text-bold text-underline">Организация доступа к сети Интернет</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Выделенные Абоненту телефонные номера для оказания услуг: **</td>
                            <td>
                                <ul type="circle">
                                    <li class="text-bold text-underline">нет</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Тип абонентского устройства предоставляемого абонентом:</td>
                            <td>
                                <ul type="circle">
                                    <li>ПК (Интернет)</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <p class="text-right mb-0">(количество, наименование устройств: телефонный аппарат, модем, факс, телекс и др.)</p>

                    <table class="table mb-0">
                        <tr>
                            <td>4.</td>
                            <td>
                                Тип порта, выделяемого абоненту:
                                (нужное подчеркнуть)
                            </td>
                            <td>
                                <ul type="circle">
                                    <li>Узкополосный</li>
                                    <li class="text-bold text-underline">Широкополосный</li>
                                    <li>другое:</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Тип используемого оборудования:*</td>
                            <td>
                                <ul type="circle">
                                    <li class="text-bold text-underline">Абонентское</li>
                                    <li class="text-bold text-underline">Модем Zexel–NBG-418 V2 - (1 - комплекта) стоимость 421 000 сум</li>
                                </ul>
                            </td>
                        </tr>
                    </table>

                    <table class="table mb-0">
                        <tr>
                            <td>6.</td>
                            <td>
                                Прямые провода:
                                (нужное подчеркнуть)
                            </td>
                            <td>
                                <ul type="circle">
                                    <li>предоставлены  Абонентом</li>
                                    <li class="text-bold text-underline">предоставлены СП ООО «Ist Telekom»</li>
                                    <li>другое:</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Тип используемого оборудования:*</td>
                            <td></td>
                        </tr>
                    </table>
                    <p class="text-right mb-0">(количество, направление)</p>

                    <table class="table last-table mb-0">
                        <tr>
                            <td>8.</td>
                            <td>
                                Почтовый адрес установки абонентского устройства:
                            </td>
                            <td>
                                <ul type="circle">
                                    <li class="text-bold text-underline">Сурхандарьинская область, г. Термез , ул.  Шукрона (бывшийМ. Каххор,)  дом 10</li>
                                    <li class="text-bold text-underline">АТС-223</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>
                                Категория пользователя абонентского устройства:
                                (нужное подчеркнуть)
                            </td>
                            <td>
                                <ul type="circle">
                                    <li>индивидуальное</li>
                                    <li class="text-bold text-underline">коллективное</li>
                                    <li>другое</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>
                                Служба сервисной поддержки
                            </td>
                            <td>
                                <ul type="circle">
                                    <li class="text-bold text-underline">Бюро приёма заявок(78) 150 08  08; (78) 770 90 09</li>
                                </ul>
                            </td>
                        </tr>
                    </table>

                    <div class="div-font-small">
                        * Оборудование предоставляется Абоненту во временное пользование без взимания дополнительных платежей с правом Оператора на возврат в
                        случае расторжения предоставляемых услуг. <br/>
                        ** В случае использования предоставленных оператором абонентских номеров в качестве номеров входящих телефонных линий автоматической
                        телефонной станции (АТС), независимо от её типа (аналоговые и цифровые и IP УАТС, включая программные коммутаторы на базе компьютерного оборудования),
                        Оператор не несет ответственности за функционирование АТС Абонента. Со своей стороны, Абонент должен придерживаться следующих правил: <br/>
                        1.	Произвести полную ревизию настроек АТС, тщательно проверить настройку всех режимов, отключить неиспользуемые функции, проверить права доступа
                        внутренних и внешних пользователей к междугородним и международным направлениям телефонной связи, проверить настройку параметров безопасности.
                        По возможности оставить доступ к международным и междугородним направлениям только для телефонов, не подключенных к АТС, а имеющих прямые номера от Оператора.
                        При использовании компьютерных программ, имеющих доступ к телефонным номерам Оператора или к внутренним номерам АТС Абонента (программные факс-машины и т.п.),
                        использовать только лицензионное программное обеспечение. Компьютеры, на которых эксплуатируются такие программы должны быть защищены антивирусным программами.
                        Базы антивирусных сигнатур должны оперативно обновляться. <br/>
                        2.	Установить собственную программу тарификации на АТС для контроля использования услуг телефонной связи локальными пользователями <br/>
                        3.	Осуществлять периодический контроль использования услуг телефонной связи посредством Персонального Кабинета Абонента на сайте СП
                        <b>ООО «Ist Telekom»</b> и своевременно информировать Оператора о несогласии с объёмом использованного телефонного трафика. <br/>
                        4.	При поступлении от абонента информации о несогласии с объемами использованного телефонного трафика, Оператор может по согласованию с абонентом ограничить
                        или приостановит использование услуги телефонии на время разбора претензии до полного выяснения обстоятельств использования трафика телефонии. Ограничение
                        или остановка услуг не освобождают абонента от оплаты уже потребленных услуг. <br/>
                        5.	В случае если работа АТС абонента создает угрозу нарушения нормальной работы сети оператора, оператор имеет право по своему усмотрению ограничить
                        или полностью остановить оказание услуг и проинформировать абонента о том, что услуги ограничены или остановлены до полного выявления причин нарушения нормальной
                        работы сети оборудованием абонента и их устранения. Ограничение или остановка услуг не освобождают абонента от оплаты уже потребленных услуг <br/>
                        6.	Претензии согласно пункта 9.1. настоящего договора по объемам трафика местной, междугородней и международной телефонной связи будут приниматься и
                        рассматриваться Оператором только при условии предоставлении данных внутренней тарификации АТС Абонента. При отсутствии данных внутренней тарификации АТС
                        Абонента расчеты за потребленные услуги производятся на основании данных тарификации Оператора. <br/>
                    </div>

                    <div class="d-flex justify-content-around mt-3">
                        <div class="text-center">
                            <p class="text-bold">
                                ОПЕРАТОР: <br>
                                Генеральный директор <br>
                                Lee Baek Hee
                            </p>
                            <p class="text-bold mb-0">_________________</p>
                            <p class="text-bold">М. П.</p>
                        </div>
                        <div class="text-center">
                            <p>
                                <span class="text-bold">АБОНЕНТ:</span> <br>
                                <span class="text_edit" contenteditable="false">Председатель областного совета</span>
                                <br>
                                <span class="text-bold text_edit" contenteditable="false">Бобокулов  У.</span>
                            </p>
                            <p class="text-bold mb-0">_________________</p>
                            <p class="text-bold">М. П.</p>
                        </div>
                    </div>
                </div>
            </div><!-- ./card -->


            <!-- 3 - list -->
            <div class="card contract-text">
                <div class="text-right">
                    Приложение №<span class="js_number_n_static">2</span> <br/>
                    к дополнительному соглашению «<span class="js_date_day_static">_____</span>»
                    <span class="js_span_date_month_html_static">________</span>
                    <span class="js_date_year_static">2022</span>г.
                </div>

                <div class="text-right">
                    <span class="js_number2">19А01№0498/2019</span>г от
                    «<span class="js_date_day">09</span>»
                    <span class="js_date_month_static">декабря</span>
                    <span class="js_date_year_static">2019</span>г.
                </div>
                <div>
                    <p class="text-center text-bold mb-0">Протокол</p>
                    <p class="text-center text-bold">согласования договорной цены на предоставляемые работы и услуги</p>

                    Мы, ниже подписавшиеся, от Абонента – и <span class="text_edit">Сурхондарё вилоят фермер, дехкон хужаликлари ва томорка ер эгалари кенгаши</span>,
                    именуемое в дальнейшем «Абонент»,  в лице председателя областного совета Бобокулова У., действующего на основании  <span class="text_edit">устава</span>,
                    с одной стороны,  и от Оператора – CП OOO «Ist Теlеkom», в лице  Генерального директора Lee Baek Hee,    с другой стороны, удостоверяем, что сторонами
                    принят Протокол  согласования договорной цены на предоставляемые работы и услуги с учетом НДС, согласно, перечня услуг (Приложение № 1) к Дополнительному
                    соглашению №<span class="js_number_n_static">5</span> от «<span class="js_date_day_static">_____</span>»  _______ 2022г. по договору 19А01№0498/2019 от
                    «<span class="js_date_day_static">09</span>»
                    <span class="js_date_month_static">декабря</span>
                    <span class="js_date_year_static">2019</span>г. <br/>


                    <p class="text-bold text-center mt-4">Ежемесячные платежи за услуги *</p>
                    <table class="table">
                        <tr>
                            <th>№</th>
                            <th>Наименование платежей</th>
                            <th>Ед. измер.</th>
                            <th>Цена, сум*</th>
                            <th>Кол- во</th>
                            <th>Стоимость, сум*</th>
                        </tr>
                        <tr>
                            <td colspan="6">1. ИНТЕРНЕТ</td>
                        </tr>
                        <tr>
                            <td>1.1</td>
                            <td>
                                <p class="mb-0 text-underline">Абонентская плата** «BIZNES OPTIMA 15»</p>
                                Доступ к глобальной сети Интернет на скорости <b>15 Мбит/с</b> неограничен <br>
                                По данному тарифному плану вводится ограничение по времени с <b>07:00 до 18:59</b> <br>
                                Доступ к глобальной сети Интернет на скорости <b>4 Мбит/с</b> неограничен
                                По данному тарифному плану вводится ограничение по времени с 19:00 до 06:59
                                Доступ к ресурсам  Tas-Ix на скорости 15 Мбит/с неограничен
                            </td>
                            <td>точка</td>
                            <td>550 000</td>
                            <td>1</td>
                            <td>550  000</td>
                        </tr>
                        <tr>
                            <td>1.2</td>
                            <td>
                                <span class="text-bold text-underline">1.2 Абонентская плата**</span> согласно тарифному плану <b>«Интернет – 2/10  Мбит/с»</b>
                                Доступ  к сети  Интернет на скорости-  2Мбит/с   неограничен
                                Доступ к ресурсам сети  TAS-IX на скорости -   10 Мбит/с неограничен
                            </td>
                            <td>точка</td>
                            <td>200 000</td>
                            <td>1</td>
                            <td>200 000</td>
                        </tr>
                    </table>
                </div>

        </div><!-- ./contract4 -->

    </section>

@endsection


@section('script')

    <script>
        $(document).ready(function () {

            $(document).on('click', '.js_text_save_btn', function (e) {
                e.preventDefault();

                let token = $('meta[name="csrf-token"]').attr('content');
                let number = $('.js_number').html()
                let title = $('.js_title4').html()
                let data = $('.js_data_all').html()

                $.ajax({
                    url: '{{ route('templates.store') }}',
                    type: 'POST',
                    data: {'_token': token, 'number': number, 'title': title, 'data': data},
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
