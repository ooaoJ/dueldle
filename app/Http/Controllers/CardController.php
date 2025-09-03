<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CardRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function get_all(Request $request){
        $cards = Card::paginate();

        return response()->json($cards);
    }

    public function index(Request $request): View
    {
        $cards = Card::paginate();

        return view('card.index', compact('cards'))
            ->with('i', ($request->input('page', 1) - 1) * $cards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $card = new Card();

        return view('card.create', compact('card'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CardRequest $request): RedirectResponse
    {
        $image = $request->file('image');

        $name = time() . '_' . $image->getClientOriginalName();

        $image->move(public_path('uploads'),$name);

        Card::create(array_merge($request->validated(),['image'=>$name]));

        return Redirect::route('cards.index')
            ->with('success', 'Card created successfully.');
    }

    public function view_cards(){
        $cards = Card::orderBy('name', 'ASC')->get();

        return view('card.view',compact('cards'));       
    }
    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $card = Card::find($id);

        return view('card.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $card = Card::find($id);

        return view('card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card): RedirectResponse
    {
        $validated = $request->validate(Card::update_rule());

        if($request->hasFile('image')){

        
        $image = $request->file('image');

        $name = time() . '_' . $image->getClientOriginalName();

        $image->move(public_path('uploads'),$name);
        
        $validated['image'] = $name;

        }else{
            $validated['image'] = $card->image;
        }
        
        if($validated['tipe_monster_card'] == null){
            $validated['tipe_monster_card'] = $card->tipe_monster_card;
        }
        
        if($validated['card_type'] == null){
            $validated['card_type'] = $card->card_type;
        }
        
        $card->update($validated);

        return Redirect::route('cards.index')
            ->with('success', 'Card updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Card::find($id)->delete();

        return Redirect::route('cards.index')
            ->with('success', 'Card deleted successfully');
    }
}
