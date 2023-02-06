<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentsController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PostController::class,'welcome'])->name('welcome');

Route::controller(PostController::class)->middleware(['auth'])->group (function() {
    Route::get('/sneaker', 'index')->name('index');
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

Route::get('/sneakers/{sneaker}/settlement', [StripePaymentsController::class, 'settlement'])->name('settlement');
Route::post('/sneakers/{sneaker}/settlement/payment', [StripePaymentsController::class, 'Payment'])->name('payment');
Route::post('/payment', [StripePaymentsController::class, 'complete'])->name('complete');

require __DIR__.'/auth.php';

?>