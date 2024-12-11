<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }

    public function edit(Serie $serie)
    {
        return view('series.create', compact('serie'));
    }

    public function update(Request $request, Serie $serie)
    {
        $serie->update(['nome' => $request->input('nome')]);

        return redirect('/series');
    }

    public function destroy(Serie $serie)
    {
        $serie->delete();

        return redirect('/series');
    }
}
