<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class ClassicModeController extends Controller
{
    public function query(Request $request){
        $cards = Card::where('name','LIKE','%'.$request->input('name').'%')->get();

        return view('game.classic',compact('cards'));
    } 
}
