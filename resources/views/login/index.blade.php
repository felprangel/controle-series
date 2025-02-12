<x-layout title="Login" >
    <form method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" required >
        <label for="password">Password</label>
        <input type="password" name="password" required >
        <button type="submit">Entrar</button>
    </form>
</x-layout>
