<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/log-in', function () {
    return view('log-in');
})->name('log-in');


Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');

Route::resource('car', CarController::class);


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
