<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColaboradorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('cliente/store', [Clientecontroller::class,'store'])->name('cliente.store');
Route::get('cliente/create',[Clientecontroller::class,'create']);
Route::get('cliente/listar',[Clientecontroller::class,'index'])->name('cliente.index');
Route::get('cliente/{cliente}',[Clientecontroller::class,'show'])->name('cliente.show');
Route::delete('cliente/{cliente}',[Clientecontroller::class,'destroy'])->name('cliente.destroy');
Route::put('cliente/{cliente}',[Clientecontroller::class,'update'])->name('cliente.update');
Route::get('cliente/{cliente}/editar',[Clientecontroller::class,'edit'])->name('cliente.edit');

 ///colaborador
 Route::post('colaborador/store', [ColaboradorController::class,'store'])->name('colaborador.store');
Route::get('colaborador/create',[ColaboradorController::class,'create']);
Route::get('colaborador/listar',[ColaboradorController::class,'index'])->name('colaborador.index');
Route::get('colaborador/{colaborador}',[ColaboradorController::class,'show'])->name('colaborador.show');
Route::delete('colaborador/{colaborador}',[ColaboradorController::class,'destroy'])->name('colaborador.destroy');
Route::put('colaborador/{colaborador}',[ColaboradorController::class,'update'])->name('colaborador.update');
Route::get('colaborador/{colaborador}/editar',[ColaboradorController::class,'edit'])->name('colaborador.edit');
