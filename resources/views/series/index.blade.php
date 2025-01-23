<x-layout title="Séries">
    <a href="{{ route('series.create') }}">Adicionar</a>

    @isset($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endisset
    <ul>
        @foreach ($series as $serie)
        <li>{{ $serie->name }}
            <form action={{ route('series.destroy', $serie->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">X</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>
