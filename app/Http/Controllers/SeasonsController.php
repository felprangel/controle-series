<?php

namespace App\Http\Controllers;

use App\Models\Season;

class SeasonsController extends Controller
{
    public function index(int $series)
    {
        $seasons = Season::query()->where('serie_id', $series)->get();

        return view('seasons.index')->with('seasons', $seasons);
    }
}
