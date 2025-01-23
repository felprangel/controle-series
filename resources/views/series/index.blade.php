<x-layout title="Séries">
    <a href="{{ route('series.create') }}">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
        <li>{{ $serie->name }}</li>
        @endforeach
    </ul>
</x-layout>
