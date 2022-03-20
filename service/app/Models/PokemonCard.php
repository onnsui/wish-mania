<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'expansion_mark_id',
        'regulation_id',
        'list_no',
        'rarity_id',
    ];
}
