@extends('layouts.app')

@section('content')

<!-- list section start -->
<div class="card">

    <table class="table table-striped w-100 table_hover" id="contract_datatable">
            <thead class="table-light">
                <tr>
                    <th style="width: 3%;">№</th>
                    <th>Имя</th>
                    <th>Число</th>
                    <th>Статус</th>
{{--                    <th style="max-width: 20%;">Комментарий</th>--}}
                    <th>Сотрудники</th>
                    <th>Юрист</th>
                    <th>Дата создания</th>
                    <th class="text-right">Действия</th>
                </tr>
            </thead>
            <tbody>
            @php
                $user = \Auth::user();
                $user->load('section');
            @endphp
            @foreach($contracts as $c)

                @if($user->section->rule == 'JURIST')
                    @if($c->status == 1 || $c->status == -1 || $c->status == 2)
                        <tr class="js_this_tr" data-id="{{ $c->id }}">
                            <td>{{ 1 + $loop->index }}</td>
                            <td>{{ $c->title }}</td>
                            <td>{{ $c->number }}</td>
                            <td>
                                @if($c->status == 0)
                                    <span class="badge badge-secondary p-1" style="font-size: 12px;">Готов к отправке</span>
                                @elseif($c->status == 1)
                                    <sapn class="badge badge-warning p-1" style="font-size: 12px;">Проверяется</sapn>
                                @elseif($c->status == -1)
                                    <sapn class="badge badge-danger p-1" style="font-size: 12px;">Отклонено</sapn>
                                @elseif($c->status == 2)
                                    <sapn class="badge badge-success p-1" style="font-size: 12px;">Одобрено</sapn>
                                @endif
                            </td>
{{--                            <td>{{ $c->comment }}</td>--}}

                            <td>{{ optional($c->user)->full_name }}</td>
                            <td>{{ optional($c->jurist)->full_name }}</td>
                            <td>{{ date('d.m.Y H:i', strtotime($c->created_at)) }}</td>

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
                            <sapn class="badge badge-warning p-1" style="font-size: 12px;">Проверяется</sapn>
                        @elseif($c->status == -1)
                            <sapn class="badge badge-danger p-1" style="font-size: 12px;">Отклонено</sapn>
                        @elseif($c->status == 2)
                            <sapn class="badge badge-success p-1" style="font-size: 12px;">Одобрено</sapn>
                        @endif
                    </td>
{{--                    <td>{{ $c->comment }}</td>--}}

                    <td>{{ optional($c->user)->full_name }}</td>
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
                    <td>{{ date('d.m.Y H:i', strtotime($c->created_at)) }}</td>

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
                    info: "Показано с _START_ по _END_ из _TOTAL_ записей",
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
            }, 100000);
        });
    </script>
@endsection
