<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {
        $seasons = $series->temporadas()->with('episodes')->get();
//        dd($series->temporadas);
        return view('seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
