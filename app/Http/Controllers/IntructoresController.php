<?php

namespace App\Http\Controllers;

use App\Models\intructores;
use Illuminate\Http\Request;

class IntructoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructores = intructores::all();
        return view('instructores.index', compact('instructores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tdoc' => 'required',
            'Numdoc' => 'required',
            'Nombres' => 'required',
            'Apellidos' => 'required',
        ]);

        intructores::create($request->all());

        return redirect()->route('instructores.index')
            ->with('success', 'Instructor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($NIS)
    {
        $instructor = intructores::findOrFail($NIS);

        return view('instructores.show', compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($NIS)
    {
        $instructor = intructores::findOrFail($NIS);

        return view('instructores.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $NIS)
    {
        $request->validate([
            'Tdoc' => 'required',
            'Numdoc' => 'required',
            'Nombres' => 'required',
            'Apellidos' => 'required',
        ]);

        $instructor = intructores::findOrFail($NIS);

        $instructor->update($request->all());

        return redirect()->route('instructores.index')
            ->with('success', 'Instructor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($NIS)
    {
        $instructor = intructores::findOrFail($NIS);

        $instructor->delete();

        return redirect()->route('instructores.index')
            ->with('success', 'Instructor eliminado correctamente');
    }
}
