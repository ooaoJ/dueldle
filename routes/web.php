<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cards', CardController::class)->middleware('auth');

Route::get('/home',function(){
    return view('admin.home');
})->name('home')->middleware('auth');