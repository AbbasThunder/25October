@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header')
            Iraq Protests
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            Iraq Protests
        @endcomponent
    @endslot
@endcomponent
