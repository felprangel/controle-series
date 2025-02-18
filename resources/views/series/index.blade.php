<x-layout title="Séries" :successMessage="$successMessage">
    @auth
        <a href="{{ route('series.create') }}">Adicionar</a>
    @endauth

    <ul>
        @foreach ($series as $serie)
        <li>
            @auth<a href="{{ route('seasons.index', $serie->id) }}">@endauth
                {{ $serie->name }}
            @auth</a>@endauth
            @auth
                <a href="{{ route('series.edit', $serie->id) }}">Editar</a>
                <form action={{ route('series.destroy', $serie->id) }} method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">X</button>
                </form>
            @endauth
        </li>
        @endforeach
    </ul>
</x-layout>
