<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eps extends Model
{
    protected $table = 'tbleps';
    protected $primaryKey = 'NIS';
    public $timestamps = false;
    protected $fillable = [
        'Tdoc',
        'Donominacion',
        'Observaciones'
    ];
}
