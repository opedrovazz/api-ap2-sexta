
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProdutoController;

Route::get('/pessoas', [PessoaController::class, 'index']);
Route::get('/pessoas/{id}', [PessoaController::class, 'show']);
Route::post('/pessoas', [PessoaController::class, 'store']);
Route::put('/pessoas/{id}', [PessoaController::class, 'update']);
Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
