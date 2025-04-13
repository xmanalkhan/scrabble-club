<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Member;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('members')->latest('played_at')->get();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        $members = \App\Models\Member::all();
        return view('games.create', compact('members'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'played_at' => 'required|date',
            'members' => 'required|array|min:2',
            'members.*.id' => 'required|exists:members,id',
            'members.*.score' => 'required|integer|min:0',
        ]);

        $game = Game::create(['played_at' => $request->played_at]);

        foreach ($validated['members'] as $data) {
            $game->members()->attach($data['id'], ['score' => $data['score']]);
        }

        return redirect()->route('games.index')->with('success', 'Game added!');
    }

    public function show(Game $game)
    {
        $game->load('members');
        return view('games.show', compact('game'));
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game deleted!');
    }
}
