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
        $data = Request::all();

        Serie::create($data);

        return Redirect::to(route('series.index'));
    }
}
