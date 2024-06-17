<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index(){
        $characters = Character::all();
        return view('characters.index', ['characters' => $characters]);
        
    }

    public function create(){
        return view('characters.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'magic' => 'required',
            'energy' => 'required'
        ]);

        $newCharacter = Character::create($data);

        return redirect(route('character.index'));

    }

    public function edit(Character $character){
        return view('characters.edit', ['character' => $character]);
    }

    public function view(Character $character){
        return view('characters.view', ['character' => $character]);
    }

    public function update(Character $character, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'magic' => 'required',
            'energy' => 'required'
        ]);

        $character->update($data);

        return redirect(route('character.index'))->with('success', 'character Updated Succesffully');

    }

    public function destroy(Character $character){
        $character->delete();
        return redirect(route('character.index'))->with('success', 'character deleted Succesffully');
    }
}
