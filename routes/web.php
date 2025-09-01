<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ClassicModeController;
use App\Http\Controllers\PersonagenController;
use App\Models\Personagen;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cards', CardController::class)->middleware('auth');

Route::get('/home',function(){
    return view('admin.home');
})->name('home')->middleware('auth');

Route::get('/view/cards',[CardController::class,'view_cards'])->name('view.cards')->middleware('auth');

Route::resource('personagens', PersonagenController::class)->middleware('auth');

Route::get('/view/personagens',[PersonagenController::class,'view_personagens'])->name('view.personagens')->middleware('auth');

Route::get('/classic',function(){
    $cards = null;
    return view('game.classic',compact('cards'));
})->name('classic');

