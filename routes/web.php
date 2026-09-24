<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'main']);

Route::get('/catalog', [SiteController::class, 'catalog']);

Route::get('/journalist', [SiteController::class, 'journalist']);

Route::get('/admin', [SiteController::class, 'admin']);

Route::get('/news/{id}', [SiteController::class, 'show']);

Route::post('/news', [SiteController::class, 'store']);

Route::get('/catalog/{category}', [SiteController::class, 'catalogCategory']);