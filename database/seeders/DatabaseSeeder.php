<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Player;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. สร้างประเภทเกมหลัก
        $genres = ['FPS', 'MOBA', 'RPG', 'Open World', 'Survival', 'Battle Royale'];
        $genreIds = [];

        foreach ($genres as $name) {
            $g = Genre::create(['genre_name' => $name]);
            $genreIds[] = $g->id;
        }

        // 2. วนลูปสุ่มสร้างข้อมูลผู้เล่น 100 คน
        for ($i = 1; $i <= 100; $i++) {
            Player::create([
                'player_name' => 'Player_' . sprintf('%03d', $i),
                'genre_id' => $genreIds[array_rand($genreIds)]
            ]);
        }
    }
}