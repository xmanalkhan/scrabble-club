<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Member;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $members = Member::factory(20)->create();

        $games = Game::factory(30)->create();

        foreach ($games as $game) {
            $players = $members->random(rand(2, 4));
            foreach ($players as $player) {
                $game->members()->attach($player->id, [
                    'score' => rand(200, 500),
                ]);
            }
        }
    }
}
