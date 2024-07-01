<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;

Route::get('/', function () {
    return view('welcome');
});

//create:入力画面
Route::get('/giftcard', [GiftController::class, 'create'])->name('giftcard.create');
//preview:確認画面
Route::post('/giftcard/preview', [GiftController::class, 'preview'])->name('giftcard.preview');
//store:決定画面
Route::post('/giftcard/preview/complete', [GiftController::class, 'store'])->name('giftcard.store');

//index:表示画面
Route::get('/present/{id}', [GiftController::class, 'index'])->name('present.index');
//create:入力画面
Route::get('/plan', [GiftController::class, 'create_plan'])->name('plan.create_plan');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
