<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class ClassicModeController extends Controller
{
    public function query(Request $request){
        $cards = Card::where('name','LIKE','%'.$request->input('name').'%')->orderBy('name','ASC')->get();

        return response()->json($cards);
    } 

    public function cardValidator(Request $request){
        
    }

}
