<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
//resources/viewsのwelcome.blade.phpの名前変更に伴い、ここも名前がwelcome⇒topに。

});


// この行を追加
Route::get('/home', 'HomeController@index')->name('home');