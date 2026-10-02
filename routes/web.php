<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', [SiteController::class, 'main']);

Route::get('/catalog', [SiteController::class, 'catalog']);

Route::get('/journalist', [SiteController::class, 'journalist']);

Route::get('/admin', [SiteController::class, 'admin']);

Route::get('/news/{id}', [SiteController::class, 'show']);

Route::post('/news', [SiteController::class, 'store']);

Route::get('/catalog/{category}', [SiteController::class, 'catalogCategory']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');