@extends('layouts.app')

@section('content')
    <h1>All Games</h1>
    <a href="{{ route('games.create') }}">Add New Game</a>
    <ul>
        @foreach($games as $game)
            <li>
                <a href="{{ route('games.show', $game) }}">
                    {{ $game->played_at->format('d M Y') }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
