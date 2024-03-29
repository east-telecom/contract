@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract2.css?'.time()) }}">
@endsection

@section('content')


    <section class="app-user-list js_data_all js_data_all_pdf" data-template_number="2">

        <div class="contract2" id="forstyle">

            <!-- 1 - list -->
            <div class="card contract-text">
                <h4 class="text-center mt-1"><span class="js_title">ДОГОВОР ПОДРЯДА</span> <span class="text_edit js_number">№ 900-1195</span></h4>
                <div class="d-flex mb-1 justify-content-between">
                    <span>г. Ташкент</span>
                    <div>
                        «<span class="text_edit js_date_day">17</span>»
                        <select name="month1" class="js_select_data_month1 js_date_month d-none">
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
                        <span class="text_edit js_date_year">2022</span>г.<br/>
                    </div>
                </div>
                <div>

                    &emsp;&emsp;&emsp;&emsp;<span class="text_edit text-bold js_company_name">ООО "Food City Tashkent"</span> именуемое в дальнейшем «Заказчик», в лице <span class="text_edit">Директора Самигова Д.</span>,
                    действующего на основании ___________________, с одной стороны, и <b>СП ООО «Ist Telekom»</b>, именуемое в дальнейшем «Подрядчик», в лице Генерального директора
                    <b>Lee Baek Hee,</b> действующего на основании <span class="text_edit js_ustav">устава</span>, с другой стороны, далее именуемые «Стороны», заключили настоящий договор о нижеследующем:<br/>

                    <p class="text-center text-bold mb-0 mt-1">1. ПРЕДМЕТ ДОГОВОРА</p>
                    1.1. Заказчик поручает и оплачивает, а Подрядчик выполняет работы по организации новой абонентской линии связи до объекта Заказчика по адресу:
                    <span class="text_edit">Ташкентская область, Уртачирчикский район, массив Ахунбабаева, поселок Кумовул</span>, согласно рабочему проекту, в объёмах, определенных
                    в Протоколе согласования единичных расценок (Приложение № 1) к договору.<br/>
                    1.2. Оборудование и кабельная продукция являются собственностью Подрядчика.<br/>
                    1.3. Срок выполнения работ с момента подписания договора и поступления предоплаты на расчетный счет Подрядчика, согласно п.5.1., а также получения
                    разрешительных документов от АК «Узбектелеком» 45 рабочих дней.<br/>

                    <p class="text-center text-bold mb-1 mt-1">2. ОБЯЗАННОСТИ СТОРОН</p>
                    2.1. С началом работ Стороны назначают ответственных представителей для решения организационных и технических вопросов, возникающих в процессе производства,
                    о чём уведомляют друг друга.<br/>
                    2.2.  Заказчик обязуется:<br/>
                    2.2.1. Предоставить Подрядчику адрес организации абонентской линии для разработки рабочего проекта.<br/>
                    2.2.2. Принять и оплатить выполненные по настоящему договору работы.<br/>
                    2.2.3. Использовать переданное Подрядчиком оборудование в соответствии с его назначением и техническими условиями эксплуатации, поддерживать его в исправном состоянии,
                    обеспечить его сохранность и возврат Подрядчику с учетом его физического износа в течение 5 (пяти) рабочих дней с момента принятия Сторонами решения об этом.
                    В случае невозможности возврата оборудования, указанного в Акте выполненных работ или его неисправности, полностью возместить Подрядчику его стоимость.<br/>
                    2.3. Подрядчик обязуется:<br/>
                    2.3.1. Выполнить работы по организации новой абонентской линии связи с надлежащим качеством, в соответствии с действующими стандартами, и в сроки, оговоренные
                    Договором и сдать монтажные работы Заказчику согласно Протокола согласования единичных расценок (Приложение № 1)<br/>

                    <p class="text-center text-bold mt-1 mb-1">З. ПОРЯДОК ПРИЕМКИ И СДАЧИ РАБОТ</p>
                    3.1. Прием-передача выполненных работ производится по Акту выполненных работ. <br/>
                    3.2. В случае определения Заказчиком в ходе приёмки неполного, или некачественного выполнения работ, Подрядчик обязан за свой счет устранить выявленные недостатки
                    в течение 3-х дней и повторно предъявить Заказчику.<br/>
                    3.3. Каждый объект считается выполненным Подрядчиком и принятым Заказчиком без предъявления дополнительных претензий после подписания Акта выполненных работ
                    в течение 5 (пяти) рабочих дней с момента его получения.<br/>
                    3.4. При отсутствии мотивированного отказа от подписания Акта выполненных работ в течение 5 (пяти) рабочих дней с момента его получения, работы считаются принятыми
                    Заказчиком, и Подрядчик вправе подписать в одностороннем порядке Акты выполненных работ, являющиеся основанием для взаиморасчётов по настоящему договору.<br/>

                    <p class="text-center text-bold mb-1 mt-1">4. ЦЕНА ДОГОВОРА</p>
                    4.1. Общая стоимость работ по настоящему Договору является договорной и определена на основании Протокола согласования единичных расценок (Приложение № 1),
                    которая является неотъемлемой частью настоящего Договора, и <span class="text_edit">составляет</span>
                    <span class="text_edit text-bold js_sum">14 000 000</span> <span class="text_edit">сум</span>
                    (<span class="js_sum_text">четырнадцать миллионов</span>) <span class="text_edit">с учётом НДС.</span><br/>

                    <p class="text-center text-bold mb-1 mt-1">5. ПОРЯДОК И УСЛОВИЯ ПЛАТЕЖЕЙ</p>
                    5.1. Заказчик обязуется произвести предоплату по данному Договору в размере <span class="text_edit">15</span> % от суммы Договора в течение
                    <span class="text_edit js_sum2">5</span> (<span class="js_sum_text2">пяти</span>) банковских дней после подписания Договора.
                    Оплата производится путём перечисления денежных средств на расчётный счёт Подрядчика прямыми банковскими переводами.<br/>
                    5.2. <span class="text_edit">Окончательный расчет по Договору производится не позднее 5 банковских дней после подписания
                        Заказчиком Акта выполненных работ, на основании предоставленного Подрядчиком счета-фактуры.</span><br/>

                    <p class="text-center text-bold mb-1 mt-1">6. ОТВЕТСТВЕННОСТЬ СТОРОН</p>
                    6.1. Сторона, не исполнившая обязательства, либо исполнившая их не надлежащим образом, несёт имущественную  ответственность и возмещает причинённые убытки,
                    исключая обстоятельства, перечисленных в разделе 7 договора.<br/>
                    6.2. В случае не выполнения обязательств, указанных в пунктах 5.1. и 5.2. Подрядчик вправе взыскать с Заказчика пеню в размере 0,2% суммы просроченного
                    платежа за каждый день просрочки, но не более 50 % суммы просроченного платежа.<br/>
                    6.3. В случае невыполнения обязательств, Заказчик вправе взыскать с Подрядчика пеню в размере 0,2% от суммы, указанной в договоре, за каждый день просрочки,
                    но не более 50% общей суммы.<br/>
                    6.4. В случае несвоевременного выполнения Заказчиком своих обязательств, предусмотренных в пункте 2.2.1 настоящего Договора, срок выполнения Подрядчиком
                    проектных работ продлевается на время задержки предоставления Заказчиком Технических Заданий на проектирование и Технических Условий.<br/>
                    6.5. Уплата неустойки не освобождает Стороны от выполнения своих договорных обязательств.<br/>
                    6.6. Ответственность сторон, не предусмотренная настоящим Договором, устанавливается в соответствии с Законом Республики Узбекистан «О договорно-правовой
                    базе деятельности хозяйствующих субъектов».<br/>

                </div>

            </div><!-- ./card -->


            <div class="html2pdf__page-break"></div>


            <!-- 2 - list -->
            <div class="card contract-text">
                <div>
                    <p class="text-center text-bold mt-1 mb-1">7. ФОРС-МАЖОР</p>
                    7.1. Стороны освобождаются от ответственности за частичное или полное неисполнение договорных обязательств, в случае, если это неисполнение вызвано
                    обстоятельствами непреодолимой силы, которые ни одна из Сторон не могла заранее ни предвидеть и ни предотвратить и из-за которых возникает невозможность выполнения
                    настоящего Договора с соблюдением его сроков и условий.<br/>
                    7.2. Обстоятельства «форс-мажора» включают, но не ограничиваются нижеследующими: стихийные бедствия (землетрясение, наводнение, пожары и др.), гражданские волнения
                    или массовые общественные беспорядки, военный переворот, военные конфликты или военные действия,
                    забастовки и иные трудовые конфликты, законы, постановления и распоряжения государственных органов в соответствующих субъектах, ограничивающие и/или
                    делающие невозможным исполнение настоящего договора, а также по причинам задержки получения технических условий и разрешительных документов на подготовку
                    проектно-сметной документации и выполнение работ.<br/>
                    7.3. Срок исполнения обязательств отодвигается соразмерно срокам, в течение которых действовали форс-мажорные обстоятельства.<br/>
                    7.4.Сторона, для которой создалась невозможность исполнения обязательств по контракту, обязана известить об этом другую Сторону в письменной форме не позднее
                    5 (пяти) дней с момента их наступления.<br/>
                    7.5. Надлежащим доказательством наличия форс-мажорных обстоятельств и их продолжительности будут служить свидетельства соответствующих компетентных органов или
                    официальные публикации в средствах массовой информации.<br/>
                    7.6. Если форс-мажорные обстоятельства будут длиться более 3 (трех) месяцев, каждая из Сторон вправе аннулировать настоящий Договор.
                    При этом производятся соответствующие взаиморасчеты по выполненным объемам работ, но ни одна из Сторон не вправе требовать возмещения убытков,
                    причиненных форс-мажорными обстоятельствами.<br/>

                    <p class="text-center text-bold mt-1 mb-1">8. РАССМОТРЕНИЕ СПОРОВ</p>
                    8.1. Все споры и разногласия, которые могут возникнуть при исполнении настоящего договора должны решаться путём переговоров между Сторонами.<br/>
                    8.2. Разногласия, возникшие при исполнении Договора и не нашедшие решения путём переговоров, передаются на рассмотрение в Ташкентский межрайонный экономический суд.<br/>

                    <p class="text-center text-bold mt-1 mb-1">9. УСЛОВИЯ ИЗМЕНЕНИЯ И РАСТОРЖЕНИЯ ДОГОВОРА</p>
                    9.1. Любые изменения, дополнения к настоящему Договору должны быть оформлены в письменном виде путём заключения дополнительного соглашения, являющегося неотъемлемой
                    частью Договора и подписанного
                    предста-вителями Сторон. Одностороннее изменение условий настоящего договора не допускается.<br/>
                    9.2. Настоящий Договор может быть расторгнут по соглашению сторон и/или по инициативе одной из Сторон, причем, сторона, выступившая с инициативой прекращения Договора,
                    не менее чем за один месяц до предполагаемой даты расторжения должна в письменном виде известить о своем намерении другую Сторону. При этом Стороны в течение 10
                    дней после расторжения Договора должны произвести полный взаиморасчет за выполненные работы.<br/>

                    <p class="text-center mt-1 mb-1 text-bold">10. ПРОЧИЕ УСЛОВИЯ</p>
                    10.1. Обо всех изменениях в правовом положении, платёжных, почтовых реквизитах стороны обязуются не позднее пяти дней со дня их наступления письменно сообщить друг другу.<br/>
                    10.2. Настоящий договор составлен и подписан Сторонами в двух экземплярах, по одному для каждой из сторон, имеющих одинаковую юридическую силу.<br/>
                    11. СРОК ДЕЙСТВИЯ ДОГОВОРА<br/>
                    11.1. Договор вступает в силу со дня его подписания сторонами и действует до полного выполнения Сторонами своих обязательств.<br/>

                    <p class="text-center text-bold mt-1">12. ЮРИДИЧЕСКИЕ АДРЕСА СТОРОН</p>

                    <div class="row">
                        <div class="col-md-6 js_tin_div1 inn">
                            <p class="text-bold">ЗАКАЗЧИК:</p>
                            <p><span class="text_edit text-bold js_name js_company_name_html">ООО "Food City Tashkent"</span></p>
                            <p><span class="text_edit js_address text-bold">111500, Ташкентская область, Уртачирчикский район, массив Ахунбабаева, поселок Кумовул</span></p>
                            <p>Р/счет: <span class="text_edit js_account text-bold">2020 8000 7008 1864 9001</span></p>
                            <p>Банк: <span class="text_edit js_bank text-bold">ГОО НБ ВЭД Р.Уз.</span></p>
                            <p>
                                МФО: <span class="text_edit text-bold js_mfo">00407</span>
                                ИНН: <span class="text_edit text-bold js_tin">305162870</span>
                                ОКЭД: <span class="text_edit text-bold js_oked">68 202</span>
                            </p>
                            <p>Телефон: <span class="text_edit text-bold js_phone">+99895 142 44 51</span></p>
                            <p>Факс: _______________________</p>
                            <p>РКННДС:</p>
                            <br/>
                            <p class="text_edit js_director_title">Директор</p>
                            <p class="text_edit js_director_full_name text-bold">Самигов Д.</p>
                            <p>_________________________________</p>
                            <p>М.П.</p>
                        </div>

                        <div class="col-md-6 inn">
                            <p class="text-bold">ПОДРЯДЧИК:</p>
                            <p class="text-bold">СП ООО «Ist Telekom»</p>
                            <p class="text-bold">100060, город Ташкент, Мирабадский район,<br/> ул. Т. Шевченко, д.21</p>
                            <p>Р/счет: <span class="text-bold">2021 4000 4042 8114 8001</span></p>
                            <p>Банк: <span class="text-bold">АО "КДБ Банк Узбекистан"</span></p>
                            <p>
                                МФО: <span class="text-bold">00842</span>
                                ИНН: <span class="text-bold">204 663 354</span>
                                ОКЭД: <span class="text-bold">61 100</span>
                            </p>
                            <p>Телефон: <span class="text-bold">78 150-09-05</span></p>
                            <p>Факс: <span class="text-bold">78 150- 01-02</span></p>
                            <p>РКННДС: <span class="text-bold">326010005625</span></p>
                            <br/>
                            <p class="text_edit js_general_director_title">Генеральный директор</p>
                            <p class="text-bold text_edit js_general_director_full_name">Lee Baek Hee</p>
                            <p>_________________________________</p>
                            <p>М.П.</p>
                        </div>
                    </div>
                </div>
            </div><!-- ./card -->


            <div class="html2pdf__page-break"></div>


            <!-- 3 - list -->
            <div class="card contract-text">
                <div>
                    <div class="text-right" style="line-height: 1;">
                        <p class="text-bold mb-0">Приложение № 1</p>
                        <p class="mb-0">к договору № <span class="js_number2">900-1195</span></p>
                        <p class="mb-0">
                            <span>от</span>
                            «<span class="js_date_day_static">17</span>»
                            <span class="js_date_month_static">мая</span>
                            <span class="js_date_year_static">2022</span>г<br/>
                        </p>
                    </div>

                    <p class="text-center text-bold mt-1 mb-2">Протокол согласования договорных единичных расценок</p>

                    &emsp;&emsp;&emsp;&emsp;Мы, нижеподписавшиеся, от <b>Заказчика</b> - <span class="text_edit text-bold js_company_name_html">ООО "Food City Tashkent"</span> в лице
                    <span class="js_director_position">Директора</span> <span class="js_director_name">Самигова Д.</span>,
                    действующего на основании ____________________, с одной стороны, и от <span class="text-bold">Подрядчика – СП OOO «Ist Теlеkom»</span>, в лице Генерального
                    директора <b>Lee Baek Hee</b>, действующего на основании <span class="js_ustav_html">устава</span>, с другой стороны, удостоверяем, что сторонами принят Протокол согласования договорных единичных
                    расценок на выполняемые работы по организации новой абонентской линии связи до объекта Заказчика.<br/>


                    <table class="table table-bordered contract2-list3-table js_table1">
                       <thead>
                            <tr>
                                <th>№</th>
                                <th class="align-middle">Наименование работ</th>
                                <th class="align-middle">Ед. изм.</th>
                                <th class="align-middle">Кол-во</th>
                                <th class="align-middle">Стоимость работ с учетом НДС, сум</th>
                            </tr>
                       </thead>
                        <tbody>
                            <tr class="js_tr_item position-relative">
                                <td class="js_number">1</td>
                                <td class="js_table_text" style="line-height: 1; text-align: left;">
                                    <span class="text_edit td-span-text">
                                        <span class="text_edit text-bold text-underline">Организация новой абонентской линии СП ООО «Ist Telekom»:*</span>
                                        <span class="text_edit text-bold">Ташкентская область Уртачирчикский район, массив Ахунбабаева, поселок Кумовул</span>
                                    </span>
                                    <ul class="ul-word-icons d-none">
                                        <li class="js_text_bold_icon"><a href="#"><i class="fa-solid fa-bold mr-1"></i></a></li>
                                        <li class="js_text_italic_icon"><a href="#"><i class="fa-solid fa-italic mr-1"></i></a></li>
                                        <li class="js_text_underline_icon"><a href="#"><i class="fa-solid fa-underline"></i></a></li>
                                    </ul>
                                </td>
                                <td class="text_edit align-middle text-center">линия</td>
                                <td class="text_edit align-middle text-center js_table_count_total">1</td>
                                <td class="text_edit align-middle text-center js_table_sena_total">14 000 000</td>
                                <td class="position-absolute add-tr-btns d-none">
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm js_icon_remove_tr_no_group" title="delete row"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr class="js_tr_total">
                                <td colspan="4" class="text-left">ИТОГО</td>
                                <td class="text-bold align-middle text-center js_table_sum_all">14 000 000</td>
                                <td class="position-absolute add-tr-btns d-none">
                                    <a href="javascript:void(0);" class="btn btn-info btn-sm js_icon_add_tr_no_group" title="add row"><i class="fas fa-plus"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="mt-1">*- Абонентская линия является собственностью  СП ООО «Ist Telekom» которое обеспечивает ее дальнейшую эксплуатацию</p>

                    <div class="row mt-5">
                        <div class="col-md-5 offset-1">
                            <p class="text-bold">ЗАКАЗЧИК</p>
                            <p>
                                <span class="js_director_title_html">Директор</span><br/>
                                <span class="js_director_full_name_html text-bold">Самигов Д.</span>
                            </p>
                            <p class="mb-0">________________</p>
                            <p>М.П.</p>
                        </div>
                        <div class="col-md-5 offset-1">
                            <p class="text-bold">ПОДРЯДЧИК</p>
                            <p>
                                <span class="js_general_director_title_html">Генеральный директор</span><br/>
                                <span class="text-bold js_general_director_full_name_html">Lee Baek Hee</span>
                            </p>
                            <p class="mb-1">__________________</p>
                            <p>М.П.</p>
                        </div>
                    </div>
                </div>
            </div><!--./card -->


        </div><!-- ./contract2 -->

    </section>


    @include('templates.form_file_and_contract_save')

@endsection


@section('script')

    <script>

        $(document).ready(function() {

            $(document).on('submit', '.js_file_form_and_save_contract', function(e) {
                e.preventDefault();

                afer_save_add_d_none_template()

                let form    = $(this);
                let number  = $('.js_number').html();
                let title   = $('.js_title1').html();
                let data    = $('.js_data_all').html();
                let template_number = $('.js_data_all_pdf').data('template_number')

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
