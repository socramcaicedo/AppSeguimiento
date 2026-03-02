<?php

namespace App\Http\Controllers;

use App\Models\ProgramaDeFormacion;
use App\Models\CentroDeFormacion;
use Illuminate\Http\Request;

class ProgramadeformacionController extends Controller
{
    public function index()
    {
        $programas = ProgramaDeFormacion::with('centro')->get();
        return view('programa.index', compact('programas'));
    }

    public function create()
    {
        $centros = CentroDeFormacion::all();
        return view('programa.create', compact('centros'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|string|max:50',
            'Denominacion' => 'required|string|max:100',
            'Direccion' => 'required|string|max:200',
            'observaciones' => 'nullable|string',
            'tbl_centrodeformacion_NIS1' => 'required|integer|exists:tbl_centrodeformacion,NIS'
        ]);

        ProgramaDeFormacion::create($validated);

        return redirect()->route('programa.index')
            ->with('success', 'Programa creado correctamente');
    }

    public function show(ProgramaDeFormacion $programa)
    {
        return view('programa.show', compact('programa'));
    }

    public function edit(ProgramaDeFormacion $programa)
    {
        $centros = CentroDeFormacion::all();
        return view('programa.edit', compact('programa', 'centros'));
    }

    public function update(Request $request, ProgramaDeFormacion $programa)
    {
        $validated = $request->validate([
            'codigo' => 'required|string|max:50',
            'Denominacion' => 'required|string|max:100',
            'Direccion' => 'required|string|max:200',
            'observaciones' => 'nullable|string',
            'tbl_centrodeformacion_NIS1' => 'required|integer|exists:tbl_centrodeformacion,NIS'
        ]);

        $programa->update($validated);

        return redirect()->route('programa.index')
            ->with('success', 'Programa actualizado correctamente');
    }
    public function destroy(ProgramaDeFormacion $programa)
    {
        $programa->delete();
        return redirect()->route('programa.index')
            ->with('success', 'Programa eliminado correctamente');
    }

}
