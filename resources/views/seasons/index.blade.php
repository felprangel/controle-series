<x-layout title="Temporadas">
    <ul>
        @foreach ($seasons as $season)
        <li>Temporada {{ $season->number }}
            <span>
                {{ $season->episodes->count() }} episódios
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
