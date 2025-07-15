<?php

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('app', ["name" => "Kiryl", "surname" => "Bazhko"]);
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
