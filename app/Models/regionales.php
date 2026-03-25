<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class regionales extends Model
{
    protected $table = 'tblregionales';

    protected $primaryKey = 'NIS';

    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'Donominacion',
        'Direcion',
        'observaciones'
    ];
}
