@extends('layouts.app')

@section('content')
    <h1>Welcome to the Scrabble Club 🧠🎲</h1>

    <p>
        This is a backend application designed for managing members, recording game scores, and showcasing top performers in our Scrabble Club.
    </p>

    <h3>What you can do:</h3>
    <ul>
        <li><strong>View Members:</strong> Browse all club members and check out individual profiles</li>
        <li><strong>Track Games:</strong> See a log of games, scores, and performance over time</li>
        <li><strong>Leaderboard:</strong> Find out who’s dominating the word board 📈</li>
    </ul>

    <p>
        This system is built with Laravel, using clean MVC architecture, relational data modeling, and real-time calculations of averages, highs, and recent games. It also includes seeding and factories for demo data.
    </p>

    <hr>

    <p>
        Ready to get started? Choose an option:
    </p>

    <ul>
        <li><a href="{{ route('members.index') }}">➡️ View All Members</a></li>
        <li><a href="{{ route('leaderboard') }}">🏆 See the Leaderboard</a></li>
        <li><a href="{{ route('games.index') }}">🎮 View All Games</a></li>
    </ul>
@endsection

