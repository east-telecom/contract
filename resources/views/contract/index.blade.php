@extends('layouts.app')

@section('content')

@php
    $user = \Auth::user();
    $user->load('section');
@endphp

<div class="card">
    @if($user->section->rule == 'JURIST')
        <div style="position: absolute; left: 10px; top: 8px; z-index: 1; cursor: pointer;">
            <a href="javascript:void(0);" class="btn js_chek_icon_btn btn-outline-primary text-primary btn-sm">
                <i class="fa-solid fa-check ml-1 mr-2" style="font-size: 15px;"></i>
                <span>Показать все документы</span>
            </a>
        </div>
    @endif

    <table class="table table-striped w-100 table_hover" id="contract_datatable">
            <thead class="table-light">
                <tr style="width: 100%">
                    <th style="width: 3%;">№</th>
                    <th>Наименование</th>
                    <th>Номер Договора</th>
                    <th>Статус</th>
                    <th>Сотрудник</th>
                    <th>Время создания</th>
                    <th>Юрист</th>
                    <th>Время проверки</th>
                    <th class="text-right">Действия</th>
                </tr>
            </thead>
            <tbody>

            @foreach($contracts as $c)

                @if($user->section->rule == 'JURIST')
                    @if($c->status == 1 || $c->status == -1 || $c->status == 2)
                        <tr class="js_this_tr {{ ($c->status != 1) ? 'd-none': '' }}" data-id="{{ $c->id }}" data-status="{{ $c->status }}">
                            <td>{{ 1 + $loop->index }}</td>
                            <td>{{ $c->title }}</td>
                            <td>{{ $c->number }}</td>
                            <td>
                                @if($c->status == 0)
                                    <span class="badge badge-secondary p-1" style="font-size: 12px;">Готов к отправке</span>
                                @elseif($c->status == 1)
                                    <sapn class="badge badge-warning p-1" style="font-size: 12px;">В процессе проверки..</sapn>
                                @elseif($c->status == -1)
                                    <sapn class="badge badge-danger p-1" style="font-size: 12px;">Отклонено</sapn>
                                @elseif($c->status == 2)
                                    <sapn class="badge badge-success p-1" style="font-size: 12px;">Подтверждено</sapn>
                                @endif
                            </td>
                            <td>{{ optional($c->user)->full_name }}</td>
                            <td>
                                @if($c->employee_send_date)
                                    {{ date('d.m.Y H:i', strtotime($c->employee_send_date)) }}
                                @endif
                            </td>
                            <td>{{ optional($c->jurist)->full_name }}</td>

                            <td>
                                @if($c->jurist_checked_date)
                                    {{ date('d.m.Y H:i', strtotime($c->jurist_checked_date)) }}
                                @endif
                            </td>

                            <td class="text-right">
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('contract.show', [$c->id]) }}" class="btn btn-outline-primary btn-sm" title="Show">
                                        <i class="fa-solid fa-file mr-1"></i> Просмотр
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endif
                @else
                    {{-- admin or user or root --}}
                    <tr class="js_this_tr" data-id="{{ $c->id }}">
                        <td>{{ 1 + $loop->index }}</td>
                        <td>{{ $c->title }}</td>
                        <td>{{ $c->number }}</td>
                        <td>
                            @if($c->status == 0)
                                <span class="badge badge-secondary p-1" style="font-size: 12px;">Готов к отправке</span>
                            @elseif($c->status == 1)
                                <sapn class="badge badge-warning p-1" style="font-size: 12px;">В процессе проверки..</sapn>
                            @elseif($c->status == -1)
                                <sapn class="badge badge-danger p-1" style="font-size: 12px;">Отклонено</sapn>
                            @elseif($c->status == 2)
                                <sapn class="badge badge-success p-1" style="font-size: 12px;">Подтверждено</sapn>
                            @endif
                        </td>
                        <td>{{ optional($c->user)->full_name }}</td>
                        <td>
                            @if($c->employee_send_date)
                                {{ date('d.m.Y H:i', strtotime($c->employee_send_date)) }}
                            @endif
                        </td>
                        <td>
                            @if($c->status == 0 && $user->section->rule != 'JURIST')
                                <a href="#" class="btn btn-secondary btn-sm js_send_to_jurists_btn" title="Send to Jurist"
                                   data-url="{{ route('contract.update_status_and_send_jurists') }}"
                                   data-id="{{ $c->id }}">
                                    <i class="fas fa-envelope"></i> отправить Юристам
                                </a>
                            @else
                                {{ optional($c->jurist)->full_name }}
                            @endif
                        </td>
                            <td>
                                @if($c->jurist_checked_date)
                                    {{ date('d.m.Y H:i', strtotime($c->jurist_checked_date)) }}
                                @endif
                            </td>

                        <td class="text-right">
                            <div class="d-flex justify-content-around">

                                @if($user->section->rule != 'JURIST')
                                    @if($c->status == 2 || $c->status == 1)
                                        <a href="{{ route('contract.show', [$c->id]) }}" class="text-info" title="Show">
                                            <i class="fas fa-eye mr-50"></i>
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ route('contract.show', [$c->id]) }}" class="text-info" title="Show">
                                        <i class="fas fa-eye mr-50"></i>
                                    </a>
                                @endif

                                @if($user->section->rule != 'JURIST')

                                    @if($c->status == 0 || $c->status == -1)
                                        <a href="{{ route('contract.edit', [$c->id]) }}" class="text-primary" title="Edit">
                                            <i class="fas fa-pen mr-50"></i>
                                        </a>
                                    @else
                                        <a href="javascript:void(0);" class="text-secondary" title="Edit">
                                            <i class="fas fa-pen mr-50"></i>
                                        </a>
                                    @endif

                                    @if($c->status == 0)
                                        <a class="text-danger js_delete_btn" href="javascript:void(0);"
                                           data-toggle="modal"
                                           data-target="#deleteModal"
                                           data-name="{{ $c->title.' '.$c->number }}"
                                           data-url="{{ route('contract.destroy', [$c->id]) }}" title="Delete">
                                            <i class="far fa-trash-alt mr-50"></i>
                                        </a>
                                    @else
                                        <a class="text-secondary" href="javascript:void(0);"
                                           title="Cannot be turned off">
                                            <i class="fas fa-trash-alt mr-50"></i>
                                        </a>
                                    @endif

                                    @if($c->status == 2)
                                        <a href="" class="text-info js_contract_copy_btn" title="Duplicate" data-contract_id="{{ $c->id }}">
                                            <i class="fa-solid fa-copy"></i>
                                        </a>
                                    @endif

                                @endif

                            </div>
                        </td>
                    </tr>
                @endif

            @endforeach

            </tbody>
        </table>

</div>
<!-- list section end -->


@endsection


@section('script')

    <script>

        $(document).ready(function() {

            $('#contract_datatable').DataTable({
                scrollY: '70vh',
                scrollCollapse: true,
                paging: true,
                pageLength: 50,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: true,
                language: {
                    search: "",
                    searchPlaceholder: " Поиск...",
                    info: "Показано с _START_ по _END_ из _TOTAL_",
                    emptyTable: "Нет данных",
                    paginate: {
                        first: "Первый",
                        last: "Последний",
                        next: "Следующий",
                        previous: "Предыдущий"
                    }
                }
            });

            setInterval(function() {
                location.reload();
            }, 80000);


            // chek contract
            $(document).on('click', '.js_chek_icon_btn', function() {
                let trs = $('.js_this_tr')

                let chek_btn = $(this);
                let icon = chek_btn.find('.fa-solid')
                let span = chek_btn.find('span')

                if (chek_btn.hasClass('btn-outline-primary')) {

                    $.each(trs, function(i, one_tr) {
                        if ($(one_tr).hasClass('d-none'))
                            $(one_tr).removeClass('d-none');
                    })

                    chek_btn.removeClass('btn-outline-primary text-primary');
                    chek_btn.addClass('btn-outline-warning text-warning');

                    icon.removeClass('fa-check mr-2')
                    icon.addClass('fa-xmark mr-1')
                    span.html('Показать документы на расмотрении')
                }
                else {
                    $.each(trs, function(i, one_tr) {
                        if ($(one_tr).data('status') != 1)
                            $(one_tr).addClass('d-none');
                    })

                    chek_btn.removeClass('btn-outline-warning text-warning');
                    chek_btn.addClass('btn-outline-primary text-primary');

                    icon.removeClass('fa-xmark mr-1')
                    icon.addClass('fa-check mr-2')
                    span.html('Показать все документы')
                }

            });



            $(document).on('click', '.js_contract_copy_btn', function(e){
                e.preventDefault();

                let contract_id = $(this).data('contract_id');
                let url = window.location.protocol + "//" + window.location.host + "/duplicate-contract/"+contract_id;

                $.ajax({
                    type: 'GET',
                    url: url,
                    success: (response) => {
                        console.log('res: ', response);
                        if(response.status)
                            location.reload();
                    },
                    error: (error) => {
                        console.log('error: ', error);
                    }
                });

            })


        });
    </script>
@endsection
