<?php

namespace App\Models;

use Database\Factories\PlayerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/** @use HasFactory<PlayerFactory> */
class Player extends Model
{
    use softDeletes, HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'name',
        'position',
        'number',
        'height',
        'weight',
        'age',
        'points',
    ];
}
