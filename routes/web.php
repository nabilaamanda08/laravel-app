<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// index adalah method di Brand Controller
Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index']);
Route::get('/brand/create', [App\Http\Controllers\BrandController::class, 'create']);
Route::post('/brand', [App\Http\Controllers\BrandController::class, 'store']);
Route::get('/brand/{id}/edit', [App\Http\Controllers\BrandController::class, 'edit']);
Route::put('/brand/{id}', [App\Http\Controllers\BrandController::class, 'update']);
Route::delete('/brand/{id}', [App\Http\Controllers\BrandController::class, 'destory']);
