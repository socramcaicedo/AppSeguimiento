<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rolesadministrativos extends Model
{
   protected $table = 'tblrolesadministrativos';

   protected $primaryKey = 'NIS';
    public $timestamps = false;

    protected $fillable = [
        'Descripcion'

    ];
}
