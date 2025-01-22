<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séries</title>
</head>
<body>
    <h1>Séries</h1>

    @foreach ($series as $serie)
        <p>{{ $serie }}</p>
    @endforeach
</body>
</html>
