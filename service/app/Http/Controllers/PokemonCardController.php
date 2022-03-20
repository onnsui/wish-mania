<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonCardRequest;
use App\Models\PokemonCard;
use Auth;
use Illuminate\Support\Facades\DB;

class PokemonCardController extends Controller
{
    public function index()
    {
        $pokemon = PokemonCard::all();

        $test = [
        'user_id' => 1,
        'name' => 'test',
        'expansion_mark_id' => 1,
        `regulation_id` => 1,
        `list_no` => 1,
        `rarity_id` => 1,
    ];
        return response($pokemon, 200);
    }

    public function store(StorePokemonCardRequest $request)
    {
        $user = Auth::user();
        $pokemon_card = DB::transaction(function () use ($request, $user) {
            return PokemonCard::create([
                'user_id' => $user->id,
                'name' => $request->input('name'),
                'expansion_mark_id' => $request->input('expansion_mark_id'),
                `regulation_id` => $request->input('regulation_id'),
                `list_no` => $request->input('list_no'),
                `rarity_id` => $request->input('rarity_id'),
            ]);
        });

        return response($pokemon_card, 201);
    }
}
