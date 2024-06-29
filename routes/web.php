<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//giftcard：表示
Route::get('/giftcard', function () {
    return view('giftcard');
});

//giftcard/preview：表示
Route::post('/giftcard/preview', function () {
    return view('giftcard-preview');
});

//giftcard：追加完了・表示
// Route::post('/giftcard/preview/complete',[GiftController::class,"store"])->name('giftcard_store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
