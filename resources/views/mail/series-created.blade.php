@component('mail::message')
    # {{ $seriesName }} has been created.

    The series {{ $seriesName }} has been created.

    @component('mail::button', ['url' => route('seasons.index', $seriesId)])
        View Series
    @endcomponent
@endcomponent
