<?php

use App\Http\Controllers\JediController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jedi', [JediController::class, 'index']);

Route::get('/jedi/{jedi}', [JediController::class, 'show']);
