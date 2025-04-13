@extends('layouts.app')

@section('content')
    <h1>Welcome to the Scrabble Club! 🎲</h1>

    <p>
        Whether you're here to check out who's been crushing the tiles or just curious about the club stats — you're in the right place.
    </p>

    <h3>What’s inside?</h3>
    <ul>
        <li><strong>Members:</strong> See who’s in the club and peek at their profile</li>
        <li><strong>Games:</strong> Browse all the Scrabble battles and scores</li>
        <li><strong>Leaderboard:</strong> Top players ranked by average score — bragging rights included 🏆</li>
    </ul>

    <p>
        Everything’s updated live, so feel free to explore! This isn’t about fancy design — it’s about getting the info you need in a snap 💡
    </p>

    <hr>

    <p>Pick where you want to go:</p>

    <ul>
        <li><a href="{{ route('members.index') }}">➡️ View All Members</a></li>
        <li><a href="{{ route('leaderboard') }}">📊 See the Leaderboard</a></li>
        <li><a href="{{ route('games.index') }}">🎮 Check Out All Games</a></li>
    </ul>
@endsection

