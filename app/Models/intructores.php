<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class intructores extends Model
{
    protected $table = 'tblintructores';
    protected $primaryKey = 'NIS';
    public $timestamps = false;

    protected $fillable = [
        'Tdoc',
        'Numdoc',
        'Nombres',
        'Apellidos',
        'Direccion',
        'Telefono',
        'CorreoInstitucional',
        'CorreoPersonal',
        'Sexo',
        'FechaNacimiento',
        'tbleps_NIS',
        'tblrolesadministrativos_NIS'
    ];
}
