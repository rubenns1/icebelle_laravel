<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('empresas', 'EmpresasController');
Route::resource('clientes', 'ClientesController');
Route::get('/produtos', [ProdutosController::class, 'index']);