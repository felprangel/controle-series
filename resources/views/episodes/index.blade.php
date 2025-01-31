<x-layout title="Episódios">
    <ul>
        @foreach ($episodes as $episode)
        <li>
            Temporada {{ $episode->number }}
        </li>
        @endforeach
    </ul>
</x-layout>
