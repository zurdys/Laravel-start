<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store'])->name('series.store');
Route::get('/series/editar/{serie}', [SeriesController::class, 'edit'])->name('series.edit');
Route::post('/series/atualizar/{serie}', [SeriesController::class, 'update'])->name('series.update');
Route::get('/series/remover/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy');
