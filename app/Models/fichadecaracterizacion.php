<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fichadecaracterizacion extends Model
{
    // Nombre exacto de la tabla
    protected $table = 'tblfichadecaraterizacion';

    // Primary key si no es 'id'
    protected $primaryKey = 'NIS';
    public $incrementing = false;

    // Si no usas created_at / updated_at
    public $timestamps = false;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'codigo',
        'Donominacion',
        'cupo',
        'FechaInicio',
        'FechaFin',
        'observaciones',
        'tbl_centrodeformacion_NIS',
        'tblprogramadeformacion_NIS'
    ];
    public function centro()
    {
        return $this->belongsTo(CentroDeFormacion::class, 'tbl_centrodeformacion_NIS1', 'NIS');
    }
}

