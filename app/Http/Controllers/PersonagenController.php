<?php

namespace App\Http\Controllers;

use App\Models\Personagen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PersonagenRequest;
use App\Models\Card;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PersonagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $personagens = Personagen::paginate();

        return view('personagen.index', compact('personagens'))
            ->with('i', ($request->input('page', 1) - 1) * $personagens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cards = Card::all();
        $personagen = new Personagen();

        return view('personagen.create', compact('personagen','cards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonagenRequest $request): RedirectResponse
    {
        $validate = $request->validated();

        $image = $request->file('image');
        $name = time() . '_' . $image->getClientOriginalName();

        $image->move(public_path('uploads'),$name);

        $validate['image'] = $name;

        Personagen::create($validate);

        return Redirect::route('personagens.index')
            ->with('success', 'Personagen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $personagen = Personagen::find($id);

        return view('personagen.show', compact('personagen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cards = Card::all();

        $personagen = Personagen::find($id);

        return view('personagen.edit', compact('personagen','cards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personagen $personagen): RedirectResponse
    {
        $validate = $request->validate([
            'name' => 'required|string',
			'gender' => 'required|string',
			'age' => 'required|int',
			'appear' => 'required|string',
			'deck_type' => 'string|string',
			'favorite_card' => 'required|int',
			'image' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time() . '_' . $image->getClientOriginalName();

            $validate['image'] = $name;
        }else{
            $validate['image'] = $personagen->image;
        }

        $personagen->update($validate);

        return Redirect::route('personagens.index')
            ->with('success', 'Personagen updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Personagen::find($id)->delete();

        return Redirect::route('personagens.index')
            ->with('success', 'Personagen deleted successfully');
    }
}
