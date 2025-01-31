<x-layout title="Episódios">
    <ul>
        @foreach ($episodes as $episode)
        <li>
            Episódio {{ $episode->number }}
        </li>
        @endforeach
    </ul>
</x-layout>
