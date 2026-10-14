<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamingChartController extends Controller
{
    public function index()
    {
        // คิวรีรวมจำนวนผู้เล่นแยกตามประเภทเกม
        $playerStats = DB::table('players')
            ->select(
                DB::raw('count(*) as player_count'),
                DB::raw('genres.genre_name as genre_name')
            )
            ->join('genres', 'players.genre_id', '=', 'genres.id')
            ->groupBy('genre_name')
            ->pluck('player_count', 'genre_name');

        $labels = $playerStats->keys();
        $data = $playerStats->values();

        return view('gaming.chart', compact('labels', 'data'));
    }
}