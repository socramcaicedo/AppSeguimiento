<?php

namespace App\Http\Controllers;

use App\Models\CentroDeFormacion;
use Illuminate\Http\Request;

class CentroDeFormacionController extends Controller
{
    /**
     * Mostrar todos los centros de formación
     */
    public function index()
    {
        $centros = CentroDeFormacion::all();
        return view('centrodeformacion.index', compact('centros'));
    }

    /**
     * Mostrar formulario para crear un centro
     */
    public function create()
    {
        return view('centrodeformacion.create');
    }

    /**
     * Guardar un nuevo centro en la base de datos
     */
    public function store(Request $request)
    {
        $request->validate([
            'Codigo' => 'required|string|max:50',
            'Denominacion' => 'required|string|max:100',
            'Direccion' => 'required|string|max:200',
            'tblregionales_NIS' => 'required|integer'
        ]);

        CentroDeFormacion::create($request->all());

        return redirect()->route('centrodeformacion.index')
            ->with('success', 'Centro creado correctamente');
    }

    /**
     * Mostrar los detalles de un centro
     */
    public function show(CentroDeFormacion $centro)
    {
        return view('centrodeformacion.show', compact('centro'));
    }

    /**
     * Mostrar formulario para editar un centro
     */
    public function edit(CentroDeFormacion $centro)
    {
        return view('centrodeformacion.edit', compact('centro'));
    }

    /**
     * Actualizar un centro existente
     */
    public function update(Request $request, CentroDeFormacion $centro)
    {
        $request->validate([
            'Codigo' => 'required|string|max:50',
            'Denominacion' => 'required|string|max:100',
            'Direccion' => 'required|string|max:200',
            'tblregionales_NIS' => 'required|integer'
        ]);

        $centro->update($request->all());

        return redirect()->route('centrodeformacion.index')
            ->with('success', 'Centro actualizado correctamente');
    }

    /**
     * Eliminar un centro (con manejo de errores)
     */
    public function destroy(CentroDeFormacion $centro)
    {
        try {
            $centro->delete();
            return redirect()->route('centrodeformacion.index')
                ->with('success', 'Centro eliminado correctamente');
        } catch (\Exception $e) {
            // Por ejemplo, si tiene relaciones que impiden eliminar
            return redirect()->route('centrodeformacion.index')
                ->with('error', 'No se puede eliminar porque tiene fichas asociadas');
        }
    }
}
