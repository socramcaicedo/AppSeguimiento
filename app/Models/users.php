<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable
{
    protected $table = 'users'; // Nombre de la tabla

    protected $fillable = [
        'name',
        'email',
        'password',
        'rol',
        'estado'
    ];
}
