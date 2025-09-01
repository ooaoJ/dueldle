<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassicModeController;
use Illuminate\Support\Facades\Cache;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/classic/query',[ClassicModeController::class,'query'])->name('classic.query');

Route::post('/classic/validate/card',[ClassicModeController::class,'cardValidator'])->name('classic.validate');
