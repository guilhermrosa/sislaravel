<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;

Route::get('/', [ClienteController::class, 'index']);
Route::get('/dashboard', [ClienteController::class, 'dashboard'])->middleware('auth');

Route::get('cliente/create', [ClienteController::class, 'create'])->middleware('auth');
Route::get('cliente/{id}', [ClienteController::class, 'show'])->middleware('auth');
Route::post('/clientes', [ClienteController::class, 'store'])->middleware('auth');
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->middleware('auth');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->middleware('auth');
Route::put('/cliente/update/{id}', [ClienteController::class, 'update'])->middleware('auth');

Route::get('endereco/create/{id}', [EnderecoController::class, 'create'])->middleware('auth');
Route::post('/endereco', [EnderecoController::class, 'store'])->middleware('auth');
Route::delete('/endereco/{id}', [EnderecoController::class, 'destroy'])->middleware('auth');
Route::get('/endereco/edit/{id}', [EnderecoController::class, 'edit'])->middleware('auth');
Route::put('/endereco/update/{id}', [EnderecoController::class, 'update'])->middleware('auth');