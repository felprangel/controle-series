<x-layout title="Editar Série">
    <form action={{ route('series.update', $series->id) }} method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome da Série:</label>
        <input type="text" name="name" id="name" value="{{ $series->name }}">
        <button>Salvar</button>
    </form>
</x-layout>
