<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index', compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->all());
        $seasons = [];
        for ($i = 1; $i <= $request->numero_temporadas; $i++) {
            $seasons[] = [
                'series_id' => $serie->id,
                'number' => $i,
            ];
        }
        Season::insert($seasons);

        $episodes = [];
        foreach ($serie->temporadas as $season) {
            for ($j = 1; $j <= $request->episodios_temporada; $j++) {
                $episodes[] = [
                    'season_id' => $season->id,
                    'number' => $j
                ];
            }
        }

        Episode::insert($episodes);

//        $serie = Series::create($request->only('nome', 'numero-temporadas', 'episodios-temporada')); GPT

        return to_route('series.index')->with('mensagem.sucesso', "Série $serie->nome adicionada com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit', compact('series'));
    }

    public function update(SeriesFormRequest $request, Series $series)
    {
        $series->update($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "Série $series->nome atualizada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série $series->nome removida com sucesso");
    }

    public function favoritar(Series $series)
    {
        $series->update(['favorito' => !$series->favorito]);

        return redirect('/series');
    }
}
