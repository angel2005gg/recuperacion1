<?php
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Clientes




Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/list', [ClienteController::class, 'index'])->name('clientes.index');
Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');


//Proyecto  
Route::get('Proyecto/create', [ProyectoController::class, 'create'])->name('Proyecto.create');
Route::post('Proyecto/store', [ProyectoController::class, 'store'])->name('Proyecto.store');
Route::get('Proyecto/list', [ProyectoController::class, 'index'])->name('Proyecto.index');
Route::delete('Proyecto/{proyecto}', [ProyectoController::class, 'destroy'])->name('Proyecto.destroy');
Route::get('Proyecto/{proyecto}', [ProyectoController::class, 'show'])->name('Proyecto.show');
Route::put('Proyecto/{proyecto}', [ProyectoController::class, 'update'])->name('Proyecto.update');
Route::get('Proyecto/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('Proyecto.edit');