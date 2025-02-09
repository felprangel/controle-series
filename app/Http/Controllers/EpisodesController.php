<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index')->with('episodes', $season->episodes);
    }

    public function update(Season $season)
    {
        $watchedEpisodes = Request::input('episodes');
        $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
            $episode->watched = in_array($episode->id, $watchedEpisodes);
        });

        $season->push();

        return Redirect::to(route('episodes.index', $season->id))->with('successMessage', 'Episódios marcados como assistidos');;
    }
}
