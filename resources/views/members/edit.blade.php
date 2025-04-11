@extends('layouts.app')

@section('content')
    <h1>Edit {{ $member->name }}</h1>

    <form method="POST" action="{{ route('members.update', $member) }}">
        @csrf
        @method('PUT')
        <label>Name: <input type="text" name="name" value="{{ old('name', $member->name) }}"></label><br>
        <label>Email: <input type="email" name="email" value="{{ old('email', $member->email) }}"></label><br>
        <button type="submit">Save</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('members.show', $member) }}">Cancel</a>
@endsection
