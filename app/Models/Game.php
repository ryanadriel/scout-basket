<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{

    use softDeletes, HasFactory;

    protected $table = 'games';
    protected $fillable = [
        'opponent',
        'scheduled_at',
        'location',
        'venue',
        'result',
        'is_finished'
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'is_finished' => 'boolean',
    ];

    protected $dates = [
        'scheduled_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public const LOCATION_HOME = 'home';
    public const LOCATION_AWAY = 'away';
}
