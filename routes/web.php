<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/detail/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    // compact crea un array associativo a partire da variabili usando il loro nome come chiave.
    return view('detail', compact('comic'));
})->name('detail');
