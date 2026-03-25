<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentroDeFormacion extends Model
{
    protected $table = 'tbl_centrodeformacion';
    protected $primaryKey = 'NIS';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'Codigo',
        'Denominacion',
        'Direccion',
        'Observaciones',
        'tblregionales_NIS'
    ];

    /**
     * Relación con programas de formación
     */
    public function programas()
    {
        return $this->hasMany(ProgramaDeFormacion::class, 'tbl_centrodeformacion_NIS1', 'NIS');
    }
}
