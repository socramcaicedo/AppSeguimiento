<?php

namespace App\Http\Controllers;

use App\Models\aprendices;
use App\Models\TiposDocumento;
use App\Models\FichaDeCaracterizacion;
use Illuminate\Http\Request;

class AprendicesController extends Controller
{
    /**
     * Mostrar listado
     */
    public function index()
    {
        // Cargar relaciones (recomendado)
        $aprendices = aprendices::with([
            'tipoDocumento',
            'fichaCaracterizacion'
        ])->get();

        return view('aprendices.index', compact('aprendices'));
    }

    /**
     * Formulario crear
     */
    public function create()
    {
        // Para selects dinámicos
        $tipos = TiposDocumento::all();
        $fichas = FichaDeCaracterizacion::all();

        return view('aprendices.create', compact('tipos', 'fichas'));
    }

    /**
     * Guardar
     */
    public function store(Request $request)
    {
        // Validación profesional
        $request->validate([
            'Numdoc' => 'required|numeric',
            'Nombres' => 'required|string|max:100',
            'Apellidos' => 'required|string|max:100',
            'CorreoInstitucional' => 'nullable|email',
            'CorreoPersonal' => 'nullable|email',
            'tbltiposdocumento_NIS' => 'required|exists:tbltiposdocumento,NIS',
            'tblfichadecaraterizacion_NIS' => 'required|exists:tblfichadecaraterizacion,NIS'
        ]);

        aprendices::create($request->all());

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz registrado correctamente');
    }

    /**
     * Mostrar uno
     */
    public function show(aprendices $aprendices)
    {
        return view('aprendices.show', ['aprendiz' => $aprendices]);
    }

    /**
     * Formulario editar
     */
    public function edit(aprendices $aprendices)
    {
        $tipos = TiposDocumento::all();
        $fichas = FichaDeCaracterizacion::all();

        return view('aprendices.edit', [
            'aprendiz' => $aprendices,
            'tipos' => $tipos,
            'fichas' => $fichas
        ]);
    }

    /**
     * Actualizar
     */
    public function update(Request $request, $aprendices)
    {
        $request->validate([
            'Numdoc' => 'required|numeric',
            'Nombres' => 'required|string|max:100',
            'Apellidos' => 'required|string|max:100',
            'tbltiposdocumento_NIS' => 'required|exists:tbltiposdocumento,NIS',
            'tblfichadecaraterizacion_NIS' => 'required|exists:tblfichadecaraterizacion,NIS'
        ]);

        $aprendices->update($request->all());

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz actualizado');
    }

    /**
     * Eliminar
     */
    public function destroy(aprendices $aprendices)
    {
        $aprendices->delete();

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz eliminado');
    }
}
