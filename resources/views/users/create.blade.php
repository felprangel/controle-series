<x-layout title="Novo Usuário" >
    <form method="post" action="{{ route('login.store') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" required >
        <label for="password">Password</label>
        <input type="password" name="password" required >
        <button type="submit">Entrar</button>
    </form>
</x-layout>
