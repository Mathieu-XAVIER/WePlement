<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WeShippsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/{category}', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.filtered');
    Route::get('/detail/{product}', [ProductController::class, 'show'])->name('products.show');
});

Route::prefix('weshipps')->middleware('auth')->group(function () {
    Route::get('/', [WeShippsController::class, 'index'])->name('weshipps.listing');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->middleware('auth')->name('logout');

require __DIR__ . '/auth.php';
