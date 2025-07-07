<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('app', ["name" => "Kiryl", "surname" => "Bazhko", "job" => "<b>BOld texT</b>"]);
})->name('home');

Route::prefix('/hello')->group(function () {
    Route::get('/', [HelloController::class, 'welcome']);

    Route::get('/{name}/{surname}', [HelloController::class, 'welcome']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('app', ["name" => "Kiryl", "surname" => "Bazhko"]);
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
