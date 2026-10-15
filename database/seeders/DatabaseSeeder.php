<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Game;
use App\Models\Player;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. สร้างหมวดหมู่ประเภทเกมหลัก (Genres)
        $genres = [
            'MOBA' => Genre::create(['genre_name' => 'MOBA']),
            'FPS' => Genre::create(['genre_name' => 'Tactical Shooter / FPS']),
            'BR' => Genre::create(['genre_name' => 'Battle Royale']),
            'RPG' => Genre::create(['genre_name' => 'RPG / Action']),
        ];

        // 2. สร้างข้อมูลเกมยอดฮิตในไทย (Games - Top Play Store & Steam)
        Game::create(['genre_id' => $genres['MOBA']->id, 'game_title' => 'Garena RoV', 'developer' => 'Garena', 'release_year' => 2017, 'platform' => 'Mobile']);
        Game::create(['genre_id' => $genres['MOBA']->id, 'game_title' => 'Dota 2', 'developer' => 'Valve', 'release_year' => 2013, 'platform' => 'PC']);
        Game::create(['genre_id' => $genres['FPS']->id, 'game_title' => 'Valorant', 'developer' => 'Riot Games', 'release_year' => 2020, 'platform' => 'PC']);
        Game::create(['genre_id' => $genres['BR']->id, 'game_title' => 'Free Fire', 'developer' => 'Garena', 'release_year' => 2017, 'platform' => 'Mobile']);
        Game::create(['genre_id' => $genres['BR']->id, 'game_title' => 'PUBG BATTLEGROUNDS', 'developer' => 'Krafton', 'release_year' => 2017, 'platform' => 'PC/Mobile']);

        // 3. สร้างข้อมูลสตรีมเมอร์และนักแข่งไทย (Players / Streamers / Pro Players)
        Player::create(['genre_id' => $genres['RPG']->id, 'player_name' => 'HEARTROCKER', 'email' => 'hrk@example.com', 'role_type' => 'Streamer', 'team_or_channel' => 'HRK Channel']);
        Player::create(['genre_id' => $genres['BR']->id, 'player_name' => 'zbing z.', 'email' => 'zbingz@example.com', 'role_type' => 'Streamer', 'team_or_channel' => 'zbing z.']);
        Player::create(['genre_id' => $genres['FPS']->id, 'player_name' => 'CigaretteS', 'email' => 'gla@example.com', 'role_type' => 'Pro Player / Streamer', 'team_or_channel' => 'Paper Rex']);
        Player::create(['genre_id' => $genres['MOBA']->id, 'player_name' => '23savage', 'email' => '23savage@example.com', 'role_type' => 'Pro Player', 'team_or_channel' => 'OG']);
        Player::create(['genre_id' => $genres['MOBA']->id, 'player_name' => 'MarkKy', 'email' => 'markky@example.com', 'role_type' => 'Pro Player', 'team_or_channel' => 'Bacon Time']);
    }
}