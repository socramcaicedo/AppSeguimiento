<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tiposdocumento extends Model
{
    protected $table = 'tbltiposdocumento';
    protected $primaryKey = 'NIS';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'Tdoc',
        'Donominacion',
        'Observaciones'
    ];

}
