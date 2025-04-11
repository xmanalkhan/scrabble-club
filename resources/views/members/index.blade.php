@extends('layouts.app')

@section('content')
    <h1>Members</h1>
    <ul>
        @foreach ($members as $member)
            <li>
                <a href="{{ route('members.show', $member) }}">{{ $member->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
