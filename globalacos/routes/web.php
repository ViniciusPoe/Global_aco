<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('index');
}) -> name('index');

Route::get('/sobre', function () {
    return view('sobre');
}) -> name('sobre');

Route::get('/produtos', function () {
    return view('produtos');
}) -> name('produtos');

Route::get('/contato', function () {
    return view('contato');
}) -> name('contato');

Route::get('/produtos/{categoria}', [ProductController::class, 'showCategory'])->name('produtos.categoria');

Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');

Route::post('/newsletter', [ContatoController::class, 'store'])->name('newsletter.store');