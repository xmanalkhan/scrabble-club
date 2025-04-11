<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Game;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function show(Member $member)
    {
        $recentGames = $member->games()->orderBy('played_at', 'desc')->limit(5)->get();

        $highestGame = $member->games()
            ->withPivot('score')
            ->orderByDesc('game_member.score')
            ->first();

        $averageScore = $member->games()->count()
            ? $member->games()->avg('game_member.score')
            : 0;

        return view('members.show', compact('member', 'recentGames', 'highestGame', 'averageScore'));
    }

    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $member->update($validated);

        return redirect()->route('members.show', $member)->with('success', 'Member updated!');
    }

    public function leaderboard()
    {
        $members = Member::with('games')
            ->get()
            ->sortByDesc(fn($m) => $m->games->count() ? $m->games->avg('pivot.score') : 0)
            ->take(10);

        return view('members.leaderboard', compact('members'));
    }
}
