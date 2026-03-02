<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entecomformadores extends Model
{
    protected $table = 'tblentecomformadores';

    protected $primarykey = 'NIS';
    public $timestamps = false;

    // Campos que se pueden insertar o actualizar masivamente
    protected $fillable = [
        'Numdoc',
        'RazonSocial',
        'Direccion',
        'Telefono',
        'CorreoPersonal'
    ];
}
