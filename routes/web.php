<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProfileController;

Route::domain('{store_name}.'.config('app.short_url'))->group(function () {
    Route::get('/', [StoreController::class, 'index'])->name('store.website');
});

Route::get('/', function () {
    return redirect()->route('register');
})->middleware('guest')->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/user/stores', [StoreController::class, 'store'])->name('store.create');
});

require __DIR__.'/auth.php';
