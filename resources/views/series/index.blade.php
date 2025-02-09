<x-layout title="Séries" :successMessage="$successMessage">
    <a href="{{ route('series.create') }}">Adicionar</a>

    <ul>
        @foreach ($series as $serie)
        <li><a href="{{ route('seasons.index', $serie->id) }}">{{ $serie->name }}</a>
            <a href="{{ route('series.edit', $serie->id) }}">Editar</a>
            <form action={{ route('series.destroy', $serie->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">X</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>
