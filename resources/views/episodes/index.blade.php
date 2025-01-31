<x-layout title="Episódios">
    <ul>
        @foreach ($episodes as $episode)
        <li>
            Episódio {{ $episode->number }}
        </li>

        <input type="checkbox" name="episodes[]" value="{{ $episode->id }}" @if ($episode->watched) checked @endif>
        @endforeach
    </ul>

    <button>Salvar</button>
</x-layout>
