<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('produits')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('products-listing');
    Route::get('/{category}',  [\App\Http\Controllers\ProductController::class, 'index'])->name('products.filtered');
    Route::get('/detail/{product}', [ProductController::class, 'show'])->name('products.show');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
