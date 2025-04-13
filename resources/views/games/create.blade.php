@extends('layouts.app')

@section('content')
    <h1>Add a Game</h1>

    <form method="POST" action="{{ route('games.store') }}">
        @csrf
        <label>Date Played: <input type="date" name="played_at"></label><br><br>

        <h3>Players & Scores</h3>
        @foreach($members as $member)
            <label>
                <input type="checkbox" name="members[{{ $loop->index }}][id]" value="{{ $member->id }}">
                {{ $member->name }}
            </label>
            <input type="number" name="members[{{ $loop->index }}][score]" placeholder="Score"><br>
        @endforeach

        <button type="submit">Save Game</button>
    </form>
@endsection
