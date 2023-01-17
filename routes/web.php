<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group (function() {
    Route::get('/', 'index')->name('index');
    Route::get('/sneakers/post', 'post')->name('post');
    Route::get('/sneakers/{sneaker}', 'show')->name('show');
    Route::post('/sneakers', 'store')->name('store');
    Route::put('/sneakers/{sneaker}', 'update')->name('update');
    Route::delete('/sneakers/{sneaker}', 'delete')->name('delete');
    Route::get('/sneakers/{sneaker}/edit', 'edit')->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('payment', [StripePaymentsController::class, 'Payment'])->name('payment');

require __DIR__.'/auth.php';

?>