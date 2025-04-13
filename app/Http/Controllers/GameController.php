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
            'selected_members' => 'required|array|min:2',
            'selected_members.*' => 'exists:members,id',
            'scores' => 'required|array',
        ]);

        foreach ($validated['selected_members'] as $memberId) {
            if (!isset($validated['scores'][$memberId]) || !is_numeric($validated['scores'][$memberId])) {
                return back()
                    ->withErrors(['scores.' . $memberId => 'A valid score is required for each selected player.'])
                    ->withInput();
            }
        }

        $game = Game::create([
            'played_at' => $validated['played_at']
        ]);

        foreach ($validated['selected_members'] as $memberId) {
            $game->members()->attach($memberId, [
                'score' => $validated['scores'][$memberId]
            ]);
        }

        return redirect()->route('games.index')->with('success', 'Game added successfully!');
    }

    public function show(Game $game)
    {
        $game->load('members');
        return view('games.show', compact('game'));
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game deleted.');
    }
}
