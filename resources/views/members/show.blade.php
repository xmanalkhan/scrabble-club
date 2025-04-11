@extends('layouts.app')

@section('content')
    <h1>{{ $member->name }}</h1>
    <p>Email: {{ $member->email }}</p>
    <p>Joined: {{ $member->joined_at->format('d M Y') }}</p>
    <p>Average Score: {{ number_format($averageScore, 1) }}</p>

    @if ($highestGame)
        <p>Highest Score: {{ $highestGame->pivot->score }} (Game on {{ $highestGame->played_at->format('d M Y') }})</p>
    @endif

    <h3>Recent Games</h3>
    <ul>
        @foreach ($recentGames as $game)
            <li>{{ $game->played_at->format('d M Y') }} - Score: {{ $game->pivot->score }}</li>
        @endforeach
    </ul>

    <a href="{{ route('members.edit', $member) }}">Edit Contact Info</a>
@endsection
