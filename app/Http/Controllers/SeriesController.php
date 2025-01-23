<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class SeriesController extends Controller
{
    public function index() {
        $series = Serie::all();
        $successMessage = Session::get('message');

        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);
    }

    public function create() {
        return view('series.create');
    }

    public function store() {
        Request::validate(['name' => ['required', 'min:3']]);
        $data = Request::all();

        $series = Serie::create($data);

        return Redirect::to(route('series.index'))->with('message', "Série '{$series->name}' criada com sucesso");
    }

    public function edit(Serie $series) {
        return view('series.edit')->with('series', $series);
    }

    public function update(Serie $series) {
        $data = Request::all();

        $series->update($data);

        return Redirect::to(route('series.index'))->with('message', "Série '{$series->name}' atualizada com sucesso");
    }

    public function destroy(Serie $series) {
        $series->delete();

        return Redirect::to(route('series.index'))->with('message', "Série '{$series->name}' removida com sucesso");
    }
}
