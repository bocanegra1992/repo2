<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuertos extends Model
{
    protected $fillable = [
        'aeropuerto', 'oaci', 'datos'
    ];
}
