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
        Card::create($request->validated());

        return Redirect::route('cards.index')
            ->with('success', 'Card created successfully.');
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
    public function update(CardRequest $request, Card $card): RedirectResponse
    {
        $card->update($request->validated());

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
