@extends('layouts.app')


@section('content')

    <section class="app-user-list js_data_all js_data_all_pdf">

        <div class="contract4">
            
            <!-- 1 - list -->
            <div class="card contract-text">
                <h4 class="text-center">Договор № <span class="text_edit js_number" contenteditable="false">106-149</span> <br/> НА АРЕНДУ КАНАЛОВ СВЯЗИ (IP ТРАНСПОРТА)</h4>
                <div class="d-flex justify-content-between">
                    <span>г. Ташкент</span>
                    <div>
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
                        <span class="text_edit js_span_date_month1">Июль</span>
                        <span class="text_edit js_date_year">2021</span>г. <br>
                    </div>
                </div>
                <div>
                    <b>СП OOO «Ist Теlеkom»</b>, именуемое в дальнейшем <b>«Арендодатель»</b>, действующее на основании  Лицензий: Серия АА №0008087 от 31.03.2020г.,
                    Серия АА №0008088 от 31.03.2020г., Серия АА №0008089 от 31.03.2020г., Серия АА №0008090 от 31.03.2020г. в лице Генерального директора Lee Baek Hee,
                    действующего на основании Устава,  с одной стороны, и <span class="text_edit text-bold">OOO «PAY-WAY»</span>, именуемый в дальнейшем <b>«Арендатор»</b>, в лице
                    <span class="text_edit" contenteditable="false">Директора</span> <span class="text_edit text-bold" contenteditable="false">Саттарова Б.Б.</span>,
                    действующий на основании  <span class="text_edit">Устава</span> с другой стороны, вместе именуемые «Стороны», заключили настоящий Договор о нижеследующем: <br>

                    <p class="text-center text-bold mb-0">1. ПРЕДМЕТ ДОГОВОРА</p>

                    1.1. Арендодатель, на основании заявок Арендатора, предоставляет, а Арендатор принимает в аренду IP каналы связи, именуемые в дальнейшем <b>“Арендованный канал”,</b>
                    согласно Приложениям, в которых указываются направления, арендованных по транспортной сети Арендодателя каналов, количество, протяженность, стоимость, скорость
                    и другие характеристики канала. <br>

                    <p class="text-bold text-center mb-0">2. УСЛОВИЯ И ПОРЯДОК АРЕНДЫ, ОБЯЗАННОСТИ И ПРАВА СТОРОН</p>
                    2.1.	 Арендованный канал подается Арендатору на условиях «порт оборудования Арендодателя». <br>
                    2.2.	 Началом работы Арендованного канала считается фактическое время включения канала по заявке Арендатора. <br>
                    2.3.	Арендодатель обязан: <br>
                    2.3.1.	предоставить Арендованный канал в соответствии с заявленными характеристиками и в заявленный срок после поступления средств
                    согласно пунктам 3.4 и 3.5 настоящего договора; <br>
                    2.3.2.	обеспечить качество работы всего канала, за исключением участка, принадлежащего Арендатору или владельцу другой сети,
                    согласно отдельно заключенному договору между Арендатором и владельцем этой сети; <br>
                    2.3.3.	письменно предупредить Арендатора не позднее чем за 3(три) рабочих дня о проведении планово – профилактических измерений трактов, линейных систем
                    передач и каналов связи, а также внеплановых настроечных работ до начала их проведения (тех.поддержка Арендатора: тел: 78-150-08-08). <br>
                    2.3.4.	в случае несвоевременной оплаты (свыше одного месяца), “Арендодатель” вправе по истечении 10 (десяти) дней после письменного предупреждения Арендатора,
                    отключить Арендованный канал или расторгнуть договор в одностороннем порядке. <br>
                    2.4.  Арендатор обязан: <br>
                    2.4.1.	для организации связи предоставить заявку с указанием: направления, пункта подачи, пропускной способности, даты включения Арендованного
                    канала, режима работы и контактных телефонов; <br>
                    2.4.2.	принять от Арендодателя в заявленный срок Арендованный канал и своевременно оплачивать стоимость Арендованного канала с момента его
                    фактического включения, но не ранее указанной в заявке даты; <br>
                    2.4.3.	при предоставлении канала в тестовом режиме оплатить стоимость арендной платы Арендованного канала за тестовый период согласно
                    Протоколу согласования объема услуг, предоставленных в тестовый период; <br>
                    2.4.4.	строго придерживаться заявленного режима работы Арендованного канала; <br>
                    2.4.5.	письменно информировать взаимодействующий с Арендатором техперсонал Арендодателя о нарушении нормальной работы Арендованного
                    канала (служба тех.поддержки Арендодателя тел: +99878 150-01-00, бюро приема заявок тел: +99878 150-08-08). Время простоя Арендованного канала
                    фиксируется Арендодателем по информации Арендатора. <br>
                    2.5. Арендатор не имеет права передавать Арендованный канал в субаренду третьим лицам. <br>

                    <p class="text-center text-bold mb-0">3. УСЛОВИЯ И ПОРЯДОК РАСЧЕТОВ</p>
                    3.1.	Стоимость арендной платы является договорной и определяется соглашением сторон. Выполнение по заявке Арендатора инсталляции/регистрации
                    каналов оплачивается согласно договорной цене (Приложения). <br>
                    3.2.	Расчет начисления арендной платы за текущий месяц производится за фактическое время работы Арендованного канала. <br>
                    3.3.	Арендодатель и Арендатор ведут учет времени фактической работы Арендованного канала по каждому месяцу в следующем порядке: <br>
                    3.3.1. суммарное время простоя канала за прошедший месяц учитывается каждой из сторон и согласовывается соответствующими службами Арендатора и Арендодателя; <br>
                    3.3.2.	стороны до 3 числа месяца, следующего за отчетным месяцем, письменно заверяют ведомость учета простоя Арендованного канала; <br>
                    3.3.3.	время фактической работы Арендованного канала рассчитывается за вычетом времени простоя Арендованного канала и является основанием для проведения
                    расчетов по выставленным счетам. <br>
                    3.3.4.	при расчете стоимости начислении арендной платы за вычетом времени простоя учитывается количество календарных дней соответствующего месяца
                    (28, 29, 30 или 31), включая выходные, праздничные дни и реальное время работы Арендованного канала. <br>
                    3.4.	Оплата Арендатором инсталляции Арендных каналов по настоящему договору производится в размере 100% предоплаты от суммы инсталляции Арендных
                    каналов (Приложение) в течение пяти банковских дней, с момента подписания договора. <br>
                    3.5   Оплата стоимости ежемесячных услуг по настоящему договору производится Абонентом на основании выставленных счетов в следующем порядке: <br>
                    3.5.1	Ежемесячно, не позднее восьмого числа месяца, следующего за расчетным, Арендатор выставляет cчет-фактуру за прошедший месяц и счет на предоплату
                    за текущий месяц в размере 100%. <br>
                    3.5.2	В срок до 15 числа месяца, следующего за расчетным, Арендатор переводит на расчетный счет Оператора сумму, согласно п.3.5.1. настоящего Договора. <br>
                    3.5.3	При изменении стоимости арендной платы стороны заключают новое соглашение о договорной цене и переоформляют Приложения к Договору. <br>
                    <p class="text-center text-bold mb-0">4. ОТВЕТСТВЕННОСТЬ СТОРОН</p>
                    4.1.	При неисполнении или ненадлежащем исполнение принятых на себя обязательств по настоящему договору стороны несут
                </div>
            </div><!-- ./card -->


            <!-- 2 - list -->
            <div class="card contract-text">
                <div>
                    ответственность: <br>
                    4.1.1.	Арендатор за несвоевременные платежи, предусмотренные п.п.3.4. и 3.5, уплачивает Арендодателю пеню в размере 0,4% от суммы просроченного платежа
                    за каждый день просрочки, но не более 20% от суммы просроченного платежа; <br>
                    4.1.2.	При нарушении Арендодателем определенного заявкой срока сдачи Арендованного канала, Арендодатель выплачивает Арендатору пеню в размере 0,4% стоимости
                    арендной платы за каждый день просрочки до даты включения, но не более 20% от стоимости арендной платы за канал. <br>
                    4.2.	Невыполнение Арендатором условий оплаты, а также п.2.5. влечет за собой отключение канала в порядке, предусмотренном п.2.6 настоящего договора.
                    В данном случае простой произведен по вине Арендатора и расчеты производятся согласно календарным дням <br>
                    4.3.	Арендодатель не несёт ответственность за нарушение работы Арендованного канала, если оно было вызвано обстоятельствами форс-мажора,
                    повреждением оконечного оборудования или принадлежащих Арендатору соединительных линий, а также изменения Арендатором режима работы Арендованного
                    канала без согласования с Арендодателем. <br>
                    4.4. Арендодатель, при своевременном предупреждении в порядке, предусмотренном п.2.3.3 договора, о проведении планово – профилактических измерений трактов,
                    линейных систем передач и каналов связи, а также внеплановых настроечных работ, не несет ответственность за нарушение работы Арендованного канала,
                    связанных с проведением таких работ. <br>

                    <p class="text-center text-bold mb-0">5. ФОРС-МАЖОР</p>
                    5.1. Стороны освобождаются от ответственности за частичное или полное неисполнение своих обязательств по настоящему Договору, если такое неисполнение
                    было вызвано обстоятельствами, находящихся вне контроля Сторон, такими как: военные действия, пожары, наводнения, землетрясения и других бедствий,
                    стихийных явлений природы, принятие нормативных актов и иных документов, препятствующих исполнению Договора. <br>
                    5.2. Сторона, для которой создалась невозможность исполнения обязательств, должна немедленно, но не позднее 15 дней с момента возникновения и прекращения
                    форс-мажорных обстоятельств, письменно извещать  другую Сторону о наступлении и прекращении вышеуказанных обстоятельств. <br>
                    5.3. Несвоевременное уведомление о наступлении или прекращении обстоятельств непреодолимой силы, лишают Сторону права ссылаться на них в дальнейшем. <br>
                    5.4. По прекращению действия обстоятельств форс-мажора Стороны возобновляют исполнение условия данного Договора. <br>
                    <p class="text-center text-bold mb-0">6. ПОРЯДОК РАЗРЕШЕНИЯ СПОРОВ</p>
                    6.1. Все споры и разногласия, возникающие в связи с исполнением настоящего Договора, разрешаются посредством переговоров. <br>
                    6.2. При не достижении согласия Сторон споры передаются на рассмотрение в Ташкентский Межрайонный Экономический суд. <br>

                    <p class="text-center text-bold mb-0">7. СРОК ДЕЙСТВИЯ ДОГОВОРА И ПОРЯДОК ЕГО РАСТОРЖЕНИЯ</p>
                    7.1 Срок действия договора - 1(один) год с момента подписания Договора. При отсутствии письменного уведомления сторон о прекращении Договора,
                    Договор считается автоматически пролонгированным на следующий годовой период, при полном взаиморасчете сторон за прошедший год и отсутствии взаимных претензий. <br>
                    7.2	 Все изменения и дополнения к настоящему договору оформляются дополнительными соглашениями, подписанными обеими сторонами. <br>
                    7.3	Каждая из сторон вправе расторгнуть настоящий договор в одностороннем порядке письменно уведомив об этом другую сторону не менее, чем
                    за 30 календарных дней до предполагаемой даты расторжения и проведении всех взаиморасчетов. <br>
                    7.4	В остальных случаях, не предусмотренных настоящим договором, стороны руководствуются действующим законодательством РУз. <br>

                    <p class="text-center text-bold mb-0">8. ПРОЧИЕ УСЛОВИЯ</p>
                    8.1.	Договор составлен в 2-х экземплярах, имеющих одинаковую юридическую силу, по одному экземпляру для каждой из сторон. <br>
                    8.2.	Все приложения к настоящему договору, составленные в письменной форме, подписанные обеими сторонами и заверенные их печатями являются неотъемлемой
                    частью настоящего договора и обязательны для исполнения сторонами. <br>
                    8.3.	При потребности в дополнительных каналах связи Арендатор направляет в адрес Арендодателя заявку с указанием направления связи и режима его работы. <br>
                    8.4.	Связи, организованные в течение года по дополнительным заявкам, оформляются Приложением к Договору. <br>

                    <p class="text-center text-bold mt-2 mb-1">8. ЮРИДИЧЕСКИЕ АДРЕСА И БАНКОВСКИЕ РЕКВИЗИТЫ СТОРОН</p>

                    <div class="row mb-4">
                        <div class="col-md-6 inn pl-4">
                            <p><b>Кредитор:</b></p>

                            <p class="text-bold">СП ООО «Ist Telekom»</p>
                            <p>100060, г. Ташкент, Мирабадский район, ул. Т. Шевченко, д.21</p>
                            <p>Р/счет: 2021 4000 4042 8114 8001</p>
                            <p>в АО «КДБ Банк Узбекистан» г.Ташкента</p>
                            <p>
                                МФО: 00842 <br>
                                ИНН: 204663354 <br>
                                ОКЭД: 61100 <br>
                            </p>
                            <p>Регистрационный код плательщика НДС <br> 326010005625</p>
                            <p>
                                Тел.: +99878 150 27 44
                                Факс: +99878 150 05 41
                            </p>

                            <p class="mt-2 mb-5 text-bold text-center">Генеральный директор</p>
                            <p class="mb-2 text-bold text-center">Lee Baek Hee</p>
                            <p class="text-center mt-3">_________________________________</p>
                            <p class="text-center" style="margin-left: 0!important;">М.П.</p>
                        </div>
                        <div class="col-md-6 inn js_tin_div1 pl-4">
                            <p class="text-bold">«Арендодатель»</p>
                            <p><span class="text_edit text-bold js_name" contenteditable="false">OOO «PAY-WAY»</span></p>
                            <p>
                                <span class="text_edit js_address" contenteditable="false">
                                    Андижанская область, город Андижан, улица <br> Бобуршох, дом 2.
                                </span>
                            </p>
                            <p>Р/счет: <span class="text_edit js_account" contenteditable="false">20208000405359257001</span></p>
                            <p>Банк: <span class="text_edit js_bank" contenteditable="false">ЦБУ Андижан АКБ Капиталбанк</span></p>
                            <p>
                                МФО: <span class="text_edit js_mfo" contenteditable="false">01088</span> <br>
                                ИНН: <span class="text_edit js_tin" contenteditable="false">308283164</span> <br>
                                ОКЭД: <span class="text_edit js_oked" contenteditable="false">62090</span> <br>
                            </p>
                            <p>Регистрационный код плательщика НДС <br> _______________________</p>
                            <p>Телефон: <span class="text_edit js_phone" contenteditable="false">+998936006677</span></p>

                            <p class="text-center mt-2 text-bold"><span class="text_edit js_director" contenteditable="false">Директор</span></p>
                            <p class="text-center mb-2"><span class="text_edit text-bold" contenteditable="false">Ахмедов Ж.А</span></p>

                            <p class="text-center mt-3">_________________________________</p>
                            <p class="text-center" style="margin-left: 0!important;">М.П.</p>

                        </div>
                    </div>
                </div>
            </div><!-- ./card -->


            <!-- 3 - list -->
            <div class="card horizontal-list">
            <div>
                <p class="text-bold text-right mb-0">Приложение №1</p>
                <div class="text-right">
                    <span class="text-bold">к договору № <span class="js_number2">106-149</span> от</span>
                    «<span class="js_date_day_static">21</span>»
                    <span class="js_date_month_static">Июнь</span>
                    <span class="js_date_year_static">2021</span>г. <br>
                </div>

            </div>

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="align-middle">№</th>
                        <th class="align-middle">к-во</th>
                        <th class="align-middle">Направление</th>
                        <th class="align-middle">Скорость</th>
                        <th class="align-middle">Протяженность</th>
                        <th class="align-middle">Абонентская линия</th>
                        <th class="align-middle">Регистрационная <br> плата*</th>
                        <th class="align-middle">Ежемесячная <br> арендная плата*</th>
                        <th class="align-middle">Порт оборудования <br> Арендодателя</th>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">1</td>
                        <td class="align-middle text-center">1</td>
                        <td class="align-middle">
                            <span class="text_edit">г.Ташкент, Мирзо-Улугбекский р-н, улица </span> <br>
                            <span class="text_edit">Зиёлилар, дом 9 (10277) - г.Ташкент, АТС 241</span>
                        </td>
                        <td class="align-middle text-center"><span class="text_edit">100 Мб/с</span></td>
                        <td class="align-middle text-center"><span class="text_edit">местный</span></td>
                        <td class="align-middle text-center"><span class="text_edit">ВОЛС стыковка с абонентом</span></td>
                        <td class="align-middle text-center"><span class="text_edit">75 000,00</span></td>
                        <td class="align-middle text-center"><span class="text_edit">1 000 000,0</span></td>
                        <td class="align-middle text-center"><span class="text_edit">Ethernet</span></td>
                    </tr>
                </tbody>
            </table>

            <p class="mt-2 mb-5">* Цены установлены в сумах РУз с учетом НДС.</p>

            <div class="row mb-5">
                <div class="col-md-5 offset-1">
                    <p class="mb-0 text-center text-bold">Генеральный директор</p>
                    <p class="mb-0 text-center text-bold">Lee Baek Hee</p>
                    <p class="text-center mb-0">____________</p>
                    <p class="text-center text-bold mb-0">М. П.</p>
                </div>

                <div class="col-md-5 offset-1">
                    <p class="text-center text-bold mb-0"><span class="text_edit">Директор</span></p>
                    <p class="text-center text-bold mb-0"><span class="text_edit">Саттаров Б.Б.</span></p>
                    <p class="text-center mb-0">____________________</p>
                    <p class="text-center mb-0">М. П.</p>
                </div>
            </div>

{{--            <i class="i-number">4</i>--}}
        </div><!--./card -->

        </div><!-- ./contract4 -->

    </section>

@endsection


@section('script')

    <script>
        $(document).ready(function() {

            $(document).on('click', '.js_text_save_btn', function (e) {
                e.preventDefault();

                let token = $('meta[name="csrf-token"]').attr('content');
                let number = $('.js_number').html()
                let title = $('.js_title4').html()
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
