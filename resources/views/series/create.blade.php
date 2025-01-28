<x-layout title="Nova Série">
    <form action={{ route('series.store') }} method="post">
        @csrf
        <label for="name">Nome da Série:</label>
        <input type="text" name="name" id="name">
        <label for="seasons">Número de Temporadas</label>
        <input type="text" name="seasons" id="seasons">
        <label for="episodes">Episódios por Temporada</label>
        <input type="text" name="episodes" id="episodes">
        <button>Adicionar</button>
    </form>
</x-layout>
