<x-layout title="Episódios">
    <form method="post">
        @csrf
        <ul>
            @foreach ($episodes as $episode)
            <li>
                Episódio {{ $episode->number }}
            </li>

            <input type="checkbox" name="episodes[]" value="{{ $episode->id }}" @if ($episode->watched) checked @endif>
            @endforeach
        </ul>

        <button type="submit">Salvar</button>
    </form>
</x-layout>
