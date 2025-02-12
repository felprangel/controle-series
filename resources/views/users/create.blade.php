<x-layout title="Novo Usuário" >
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <label for="username">Email</label>
        <input type="text" name="username" required >
        <label for="email">Email</label>
        <input type="email" name="email" required >
        <label for="password">Password</label>
        <input type="password" name="password" required >
        <label for="confirm_password">Password</label>
        <input type="password" name="confirm_password" required >
        <button type="submit">Entrar</button>
    </form>
</x-layout>
