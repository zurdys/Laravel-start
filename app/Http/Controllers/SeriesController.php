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
        $dadosSerie = $request->all('nome', 'numero-temporadas', 'episodios-temporada');
        $serie = new Serie();
        $serie->nome = $dadosSerie['nome'];
        $serie->numero_temporadas = $dadosSerie['numero-temporadas'];
        $serie->episodios_temporada = $dadosSerie['episodios-temporada'];
        $serie->save();

//        $serie = Serie::create($request->only('nome', 'numero-temporadas', 'episodios-temporada')); GPT
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

    public function favoritar(Serie $serie)
    {
        $serie->update(['favorito' => !$serie->favorito]);

        return redirect('/series');
    }
}
