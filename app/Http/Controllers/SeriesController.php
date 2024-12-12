<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index', compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
//        $serie = Serie::create($request->only('nome', 'numero-temporadas', 'episodios-temporada')); GPT
        return to_route('series.index')->with('mensagem.sucesso', "Série $serie->nome adicionada com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit', compact('series'));
    }

    public function update(Request $request, Serie $series)
    {
        $series->update($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "Série $series->nome atualizada com sucesso");
    }

    public function destroy(Serie $series)
    {
        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série $series->nome removida com sucesso");
    }

    public function favoritar(Serie $series)
    {
        $series->update(['favorito' => !$series->favorito]);

        return redirect('/series');
    }
}
