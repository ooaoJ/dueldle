<?php

use App\Http\Controllers\CardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassicModeController;
use App\Models\Card;
use Illuminate\Support\Facades\Cache;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/classic/query',[ClassicModeController::class,'query'])->name('classic.query');

Route::post('/classic/validate/card',[ClassicModeController::class,'cardValidator'])->name('classic.validate');

Route::get('/get/cards',function(){
    
    return  response()->json(['card'=>Card::where('name',$card = Cache::remember('card',now()->addDay(1),function(){
            $card = Card::all();

            $size = Card::count();

            $pointer = random_int(1,$size);

            return $card[$pointer]['name'];
        })
    )->first()]);

})->name('get.card');

Route::get('/cards',[CardController::class,'get_all']);

Route::post('/limiter-day',[ClassicModeController::class,'rateLimiter']);
