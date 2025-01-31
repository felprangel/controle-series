<x-layout title="Temporadas">
    <ul>
        @foreach ($seasons as $season)
        <li>
            <a href="{{ route('episodes.index', $season->id) }}">
                Temporada {{ $season->number }}
            </a>
            <span>
                {{ $season->episodes->count() }} episódios
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
