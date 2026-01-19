<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);


// index adalah method di Brand Controller
Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand.index');
Route::get('/brand/create', [App\Http\Controllers\BrandController::class, 'create']);
Route::post('/brand', [App\Http\Controllers\BrandController::class, 'store']);
Route::get('/brand/{id}/edit', [App\Http\Controllers\BrandController::class, 'edit']);
Route::put('/brand/{id}', [App\Http\Controllers\BrandController::class, 'update']);
Route::delete('/brand/{id}', [App\Http\Controllers\BrandController::class, 'destroy']);

// index adalah method di Model Controller
Route::get('/model', [App\Http\Controllers\ModelController::class, 'index'])->name('model.index');
Route::get('/model/create', [App\Http\Controllers\ModelController::class, 'create'])->name('model.create');
Route::post('/model', [App\Http\Controllers\ModelController::class, 'store'])->name('model.store');
Route::get('/model/{id}/edit', [App\Http\Controllers\ModelController::class, 'edit'])->name('model.edit');
Route::put('/model/{id}', [App\Http\Controllers\ModelController::class, 'update'])->name('model.update');
Route::delete('/model/{id}', [App\Http\Controllers\ModelController::class, 'destroy'])->name('model.destroy');

// index adalah method di Model Controller
Route::get('/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('detail.index');
Route::get('/detail/create', [App\Http\Controllers\DetailController::class, 'create'])->name('detail.create');
Route::post('/detail', [App\Http\Controllers\DetailController::class, 'store'])->name('detail.store');
Route::get('/detail/{id}/edit', [App\Http\Controllers\DetailController::class, 'edit'])->name('detail.edit');
Route::put('/detail/{id}', [App\Http\Controllers\DetailController::class, 'update'])->name('detail.update');
Route::delete('/detail/{id}', [App\Http\Controllers\DetailController::class, 'destroy'])->name('detail.destroy');


