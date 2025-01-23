<x-layout title="Nova Série">
    <form action={{ route('series.store') }} method="post">
        @csrf
        <label for="name">Nome da Série:</label>
        <input type="text" name="name" id="name">
        <button>Adicionar</button>
    </form>
</x-layout>
