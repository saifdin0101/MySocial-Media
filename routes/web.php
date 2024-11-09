<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/groups', [GroupController::class, 'index'])->name('group');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat');
    Route::get('/store', [StoreController::class, 'index'])->name('store');
    Route::post('/store/store', [StoreController::class, 'store'])->name('store.store');
});

require __DIR__.'/auth.php';
