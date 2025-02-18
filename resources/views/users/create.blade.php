<x-layout title="Novo Usuário" >
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <label for="username">Name</label>
        <input type="text" name="name" required >
        <label for="email">Email</label>
        <input type="email" name="email" required >
        <label for="password">Password</label>
        <input type="password" name="password" required >
        <button type="submit">Registrar</button>
    </form>
</x-layout>
