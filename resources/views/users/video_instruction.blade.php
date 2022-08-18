
@extends('layouts.app')

@section('content')

    <div class="row bg-white pl-1 pr-1 pt-3 pb-3">

        <div class="col-md-3 col-sm-6 col-12">
            <h4 class="text-info">Создание и Отправка Договора</h4>
            <video style="margin: 0 auto;" width="320" height="200" controls>
                <source src="{{ asset('/video/abonet-create.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <h4 class="text-info">Редактирование Договора</h4>
            <video style="margin: 0 auto;" width="320" height="200" controls>
                <source src="{{ asset('/video/abonet-edit.mp4') }}" type="video/mp4">
            </video>

        </div>


        <div class="col-md-3 col-sm-6 col-12">
            <h4 class="text-info">Скачивание Документов</h4>
            <video style="margin: 0 auto;" width="320" height="200" controls>
                <source src="{{ asset('/video/abonet-save.mp4') }}" type="video/mp4">
            </video>
        </div>


        <div class="col-md-3 col-sm-6 col-12">
            <h4 class="text-info">Проверка Документа</h4>
            <video style="margin: 0 auto;" width="320" height="200" controls>
                <source src="{{ asset('/video/jurist.mp4') }}" type="video/mp4">
            </video>
        </div>

    </div>

@endsection

