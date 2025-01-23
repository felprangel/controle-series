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
        $data = Request::all();

        Serie::create($data);

        return Redirect::to(route('series.index'));
    }

    public function destroy() {
        $id = Request::route('series');

        Serie::destroy($id);
        Session::flash('message', "Série removida com sucesso");

        return Redirect::to(route('series.index'));
    }
}
