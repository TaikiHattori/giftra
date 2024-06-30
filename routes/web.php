<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GiftController;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

//giftcard：表示
Route::get('/giftcard', [GiftController::class, 'create'])->name('giftcard.create');
//giftcard/preview：表示
Route::post('/giftcard/preview', [GiftController::class, 'preview'])->name('giftcard.preview');
//giftcard：追加完了・表示
Route::post('/giftcard/preview/complete', [GiftController::class, 'store'])->name('giftcard.store');


//post 入力画面
Route::get('/post', [PostController::class, 'create'])->name('post.create');
//post 登録処理
Route::post('/post/complete', [PostController::class, 'store'])->name('post.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
