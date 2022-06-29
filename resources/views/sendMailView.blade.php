
{{--@component('mail::message')--}}

    <h5 class="text-primary text-center">{{ $text }}</h5>

    @component('mail::button', ['url' => $url])
        Click here
    @endcomponent


{{--@endcomponent--}}
