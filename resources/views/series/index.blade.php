<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
    @foreach ($series as $serie)
    <p>{{ $serie }}</p>
    @endforeach
</x-layout>
