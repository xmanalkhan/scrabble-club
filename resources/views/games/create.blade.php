@extends('layouts.app')

@section('content')
    <h1>Add a Game</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 1rem;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('games.store') }}">
        @csrf
        <label>Date Played: <input type="date" name="played_at"></label><br><br>

        <h3>Players & Scores</h3>
        @foreach ($members as $member)
            <div>
                <input type="checkbox" name="selected_members[]" value="{{ $member->id }}" id="member_{{ $member->id }}">
                <label for="member_{{ $member->id }}">{{ $member->name }}</label>

                <input type="number" name="scores[{{ $member->id }}]" placeholder="Score">
            </div>
        @endforeach

        <button type="submit">Save Game</button>
    </form>
@endsection

