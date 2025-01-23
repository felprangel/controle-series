<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = Serie::all();

        return view('series.index')->with('series', $series);
    }

    public function create() {
        return view('series.create');
    }

    public function store() {
        $serieName = Request::input('name');

        $serie = new Serie();
        $serie->name = $serieName;
        $serie->save();

        return Redirect::to('/series');
    }
}
