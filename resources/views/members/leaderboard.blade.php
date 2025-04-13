@extends('layouts.app')

@section('content')
    <h1>Top 10 Members</h1>
    <p>Well done to these lucky lot!</p>
    <ol>
        @foreach ($members as $member)
            <li>
                {{ $member->name }} - Avg:
                {{ number_format($member->games->avg('pivot.score'), 1) }}
            </li>
        @endforeach
    </ol>
@endsection
