
{{--@component('mail::message')--}}

    <h5 class="text-primary text-center">{{ $title }}</h5>

    @foreach($content_array as $key => $val)
        <p class="mb-1 mt-0">{{ $key }} : {{ $val }} </p>
    @endforeach

{{--    @component('mail::button', ['url' => $url])--}}
{{--        Кликните сюда--}}
{{--    @endcomponent--}}

    <p>Ссылка для просмотра: {{ $url }}</p>

{{--@endcomponent--}}
