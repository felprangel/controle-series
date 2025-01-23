<x-layout title="Nova Série">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action={{ route('series.store') }} method="post">
        @csrf
        <label for="name">Nome da Série:</label>
        <input type="text" name="name" id="name">
        <button>Adicionar</button>
    </form>
</x-layout>
