<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Mail\SeriesCreated;
use App\Models\Serie;
use App\Repositories\SeriesRepository;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SeriesController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [new Middleware(Authenticate::class, except: ['index'])];
    }

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

    public function store(SeriesFormRequest $request, SeriesRepository $repository)
    {
        $series = $repository->add($request);

        $email = new SeriesCreated($series->name, $series->id);
        Mail::to(Auth::user())->send($email);

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
