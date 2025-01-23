<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Arcane'
        ];

        return view('series.index')->with('series', $series);
    }

    public function create() {
        return view('series.create');
    }

    public function store() {
        $nomeSerie = Request::input('nome');

        DB::insert("INSERT INTO series (name) VALUES (:nome)", ['nome' => $nomeSerie]);
    }
}
