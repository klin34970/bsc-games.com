<?php

namespace App\Models\Games\BNBomb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $connection= 'bnbomb';

    protected $table = 'scores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chain_id',
        'wallet_id',
        'trx_id',
        'round',
        'score',
        'round_start',
        'round_end'
    ];
}
