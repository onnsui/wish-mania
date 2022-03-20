<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpansionMarks extends Model
{
    use HasFactory;

    const EXPANSION_MARK_TYPE = [
        'S9',
        'S8a',
        'S8',
        'S7R',
        'S7D',
        'S6K',
        'S6H',
        'S5R',
        'S5I',
        'S4',
        'S3',
        'S2',
        'S1H',
        'S1W',
        'S9a',
        'S6a',
        'S5a',
        'S3a',
        'S2a',
        'S1a',
        'S8b',
        'S4a',
        'SLD',
        'SLL',
        'SJ',
        'SI',
        'SH',
        'SGI',
        'SGG',
        'SC2',
        'SEK',
        'SEF',
        'SD',
        'SC',
        'SA',
        'SK',
        'SP5',
        'SP4',
        'SP3',
        'SF',
        'SP2',
        'SP1',
        'SB',
        'S8a-P',
    ];
}
