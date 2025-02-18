<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    @auth
        <nav><a href="{{ route('logout')}}">logout</a></nav>
    @endauth

    @guest
        <nav>
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('users.create') }}">register</a>
        </nav>
    @endguest

    <h1>{{ $title }}</h1>

    @isset($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endisset

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ $slot }}
</body>
</html>
