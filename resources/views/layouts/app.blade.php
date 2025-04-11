<!DOCTYPE html>
<html>
<head>
    <title>Scrabble Club</title>
</head>
<body>
<nav>
    <a href="{{ route('members.index') }}">All Members</a> |
    <a href="{{ route('leaderboard') }}">Leaderboard</a>
</nav>
<hr>
<div>
    @yield('content')
</div>
</body>
</html>
