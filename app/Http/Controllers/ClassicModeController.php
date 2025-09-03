<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ClassicModeController extends Controller
{
    public function validateAttempt($ip){
       if(Cache::get($ip)){
            abort(401,'invalid attempt');
       };
    }

    public function query(Request $request){

        $this->validateAttempt($request->ip());

        $cards = Card::where('name','LIKE','%'.$request->input('name').'%')->orderBy('name','ASC')->get();

        return response()->json($cards);
    } 

    public function cardValidator(Request $request){

        $this->validateAttempt($request->ip());

        $card = Cache::remember('card',now()->addDay(1),function(){
            $card = Card::all();

            $size = Card::count();

            $pointer = random_int(1,$size);

            return $card[$pointer]['name'];
        });

        $card_validate = Card::where('name',$card)->first();

        $card_client = Card::where('name',$request->input('guess_card'))->first();

        if($card_validate == $card_client){
            return response()->json(['status'=>'completed','data'=>$card_client],200);
        }

        return response()->json(['status'=>'failed','data'=>$card_client],200);
        
    }

    public function rateLimiter(Request $request){

        $ip = $request->ip();

        $ip = Cache::remember($ip,now()->addHour(5),function() use ($ip){
            return $ip;
        });

        return response()->json(['ip'=>$ip]);
    }   

}
