<?php

namespace App\Http\Controllers;

use App\Models\CentroDeFormacion;
use App\Models\ProgramaDeFormacion;
use Illuminate\Http\Request;
use App\Models\fichadecaracterizacion;

class FichadecaracterizacionController extends Controller
{
    public function index()
    {
        $fichas = fichadecaracterizacion::all();
        return view('fichadecaracterizacion.index', compact('fichas'));
    }

    public function create()
    {
        $centros = CentroDeFormacion::all();
        $programas = ProgramaDeFormacion::all();
        return view('fichadecaracterizacion.create', compact('centros', 'programas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|string|max:50',
            'Donominacion' => 'required|string|max:100',
            'cupo' => 'required|string|max:200',
            'FechaInicio' => 'nullable|string',
            'FechaFin' => 'nullable|string',
            'observaciones' => 'nullable|string',
            'tbl_centrodeformacion_NIS' => 'required|integer',
            'tblprogramadeformacion_NIS' => 'required|integer'
        ]);

        fichadecaracterizacion::create($validated);

        return redirect()->route('fichadecaracterizacion.index')
            ->with('success', 'Ficha creada correctamente');
    }

    public function show($NIS)
    {
        $fichas = fichadecaracterizacion::findOrFail($NIS);

        return view('fichadecaracterizacion.show',
            compact('fichas'));
    }

    public function edit($NIS)
    {
        $fichas = fichadecaracterizacion::findOrFail($NIS);

        return view('fichadecaracterizacion.edit',
            compact('fichas'));
    }

    public function update(Request $request, $NIS)
    {
        $data = $request->only([
            'codigo',
            'Donominacion',
            'cupo',
            'FechaInicio',
            'FechaFin',
            'observaciones'
        ]);

        $fichas = fichadecaracterizacion::findOrFail($NIS);

        $fichas->update($data);

        return redirect()->route('fichadecaracterizacion.index')
            ->with('success', 'Ficha actualizada correctamente');
    }

    public function destroy($NIS)
    {
        $fichas = fichadecaracterizacion::findOrFail($NIS);
        $fichas->delete();

        return redirect()->route('fichadecaracterizacion.index')
            ->with('success', 'Ficha eliminada correctamente');
    }
}
