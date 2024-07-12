<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\GolController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('jugador/store', [JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/create',[JugadorController::class,'create']);
Route::get('jugador/listar',[JugadorController::class,'index'])->name('jugador.index');
Route::get('jugador/{jugador}',[JugadorController::class,'show'])->name('jugador.show');
Route::delete('jugador/{jugador}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::put('jugador/{jugador}',[JugadorController::class,'update'])->name('jugador.update');
Route::get('jugador/{jugador}/editar',[JugadorController::class,'edit'])->name('jugador.edit');




//gol

Route::post('gol/store', [GolController::class,'store'])->name('gol.store');
Route::get('gol/create',[GolController::class,'create']);
Route::get('gol/listar',[GolController::class,'index'])->name('gol.index');
Route::get('gol/{gol}',[GolController::class,'show'])->name('gol.show');
Route::delete('gol/{gol}',[GolController::class,'destroy'])->name('gol.destroy');
Route::put('gol/{gol}',[GolController::class,'update'])->name('gol.update');
Route::get('gol/{gol}/editar',[GolController::class,'edit'])->name('gol.edit');
