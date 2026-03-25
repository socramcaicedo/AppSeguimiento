<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramaDeFormacion extends Model
{
    protected $table = 'tblprogramadeformacion';
    protected $primaryKey = 'NIS';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'Denominacion',
        'Direccion',
        'observaciones',
        'tbl_centrodeformacion_NIS1'
    ];

    /**
     * Relación con el centro de formación
     */
    public function centro()
    {
        return $this->belongsTo(CentroDeFormacion::class, 'tbl_centrodeformacion_NIS1', 'NIS');
    }
}
