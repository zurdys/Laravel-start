<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class);

Route::controller(SeriesController::class)->group(function () {
//    Route::get('/series','index')->name('series.index');
//    Route::get('/series/criar','create')->name('series.create');
//    Route::post('/series/salvar','store')->name('series.store');
//    Route::get('/series/editar/{series}','edit')->name('series.edit');
//    Route::post('/series/atualizar/{series}','update')->name('series.update');
//    Route::post('/series/remover/{series}','destroy')->name('series.destroy');
    Route::get('/series/favoritos/','show')->name('series.show');
    Route::get('/series/favoritar/{series}','favoritar')->name('series.favoritar');
});

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
