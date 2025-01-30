<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        $successMessage = Session::get('message');

        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) {
        $series = Serie::create($request->all());

        $seasons = [];
        for ($i = 1; $i <= $request->seasons; $i++) {
            $seasons[] = ['serie_id' => $series->id, 'number' => $i];
        }

        Season::insert($seasons);

        $episodes = [];
        foreach ($series->seasons as $season) {
            for ($j = 1; $j <= $request->episodes; $j++) {
                $episodes[] = ['season_id' => $season->id, 'number' => $j];
            }
        }

        Episode::insert($episodes);
        return Redirect::to(route('series.index'))->with('message', "Série '{$series->name}' criada com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('series', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return Redirect::to(route('series.index'))->with('message', "Série '{$series->name}' atualizada com sucesso");
    }

    public function destroy(Serie $series)
    {
        $series->delete();

        return Redirect::to(route('series.index'))->with('message', "Série '{$series->name}' removida com sucesso");
    }
}
