@extends('layouts.app')

@section('content')
    <h1>Game on {{ $game->played_at->format('d M Y') }}</h1>

    <ul>
        @foreach ($game->members as $member)
            <li>{{ $member->name }} - Score: {{ $member->pivot->score }}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('games.destroy', $game) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Game</button>
    </form>

    <a href="{{ route('games.index') }}">Back to Games</a>
@endsection
