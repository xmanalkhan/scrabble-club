<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scrabble Club</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #4f46e5;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 0;
        }
    </style>
</head>
<body>
<nav>
    <a href="{{ route('welcome') }}">Home</a>
    <a href="{{ route('members.index') }}">All Members</a>
    <a href="{{ route('leaderboard') }}">Leaderboard</a>
    <a href="{{ route('games.index') }}">All Games</a>
</nav>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
