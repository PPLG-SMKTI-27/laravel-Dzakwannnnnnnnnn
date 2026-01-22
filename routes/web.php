<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataUserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/', [DataUserController::class, 'index']);




