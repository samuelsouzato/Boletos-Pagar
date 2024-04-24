<?php

use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gostosa', function (){
    return view('teste');

});

//Contas
Route::get('/contas.index', [ContaController::class, 'index'])->name('contas.index');

//Visualizar (get)
Route::get('/contas.create', [ContaController::class, 'create'])->name('contas.create');

//Receber os dados do formulário (post)
Route::post('/contas.store', [ContaController::class, 'store'])->name('contas.store');

//Visualizar
Route::get('/contas.show', [ContaController::class, 'show'])->name('contas.show');

//Carregar o Formulário editar
Route::get('/contas.edit', [ContaController::class, 'edit'])->name('contas.edit');

//Receber os dados do formulário e editar (put)
Route::put('/contas.update', [ContaController::class, 'update'])->name('contas.update');

//Apagar (delete)
Route::delete('/contas.destroy', [ContaController::class, 'destroy'])->name('contas.destroy');


   


