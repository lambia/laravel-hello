@extends('layouts.app')

@section("title", "About")

@section('content')
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
        
@endsection