<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Laravel World</title>
</head>
<body>

    <header>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('informazioni') }}">About</a>
    </header>

    <h1>About us: {{ $titolo }}</h1>
    <p>{{ $desc }}</p>
    
    <h2>Studenti</h2>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    </ul>

    <h2>Docenti</h2>
        @if (count($teachers)>0)
            <ul>
            @foreach ($teachers as $teacher)
                <li>{{ $teacher }}</li>
            @endforeach
            </ul>
        @else
            <p>Non sono ancora presenti docenti</p>
        @endif
    
</body>
</html>