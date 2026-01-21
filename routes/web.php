<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/galeri', function () {
    return view('galeri');
});

route::get('/project', [ProjectController::class, 'index']);




