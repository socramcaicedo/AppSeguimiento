<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aprendices extends Model
{
    /**
     * Tabla asociada
     */
    protected $table = 'tblaprendices';


    /**
     * Clave primaria
     */
    protected $primaryKey = 'NIS';

    /**
     * Sin timestamps
     */
    public $timestamps = false;

    /**
     * Autoincremental
     */
    public $incrementing = true;

    /**
     * Campos asignables masivamente
     */
    protected $fillable = [
        'Numdoc',
        'Nombres',
        'Apellidos',
        'Direccion',
        'Telefono',
        'CorreoInstitucional',
        'CorreoPersonal',
        'Sexo',
        'FechaNacimiento',
        'tbltiposdocumento_NIS',
        'tblfichadecaraterizacion_NIS'
    ];

    /**
     * Relación → Tipo de documento
     */
    public function tipoDocumento()
    {
        return $this->belongsTo(
            TiposDocumento::class,
            'tbltiposdocumento_NIS',
            'NIS'
        );
    }

    /**
     * Relación → Ficha de caracterización
     */
    public function fichaCaracterizacion()
    {
        return $this->belongsTo(
            FichaDeCaracterizacion::class,
            'tblfichadecaraterizacion_NIS',
            'NIS'
        );
    }

}
