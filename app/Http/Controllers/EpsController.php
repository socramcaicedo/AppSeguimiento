<?php

namespace App\Http\Controllers;

use App\Models\eps;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eps = eps::all();
        return view('eps.index', compact('eps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tdoc' => 'required',
            'Donominacion' => 'required',
            'Observaciones' => 'nullable'
        ]); eps::create($request->all());

        return redirect()->route('eps.index')
            ->with('success', 'EPS registrada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(eps $eps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $eps = eps::findOrFail($id);
        return view('eps.edit', compact('eps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $eps = eps::findOrFail($id);

        $eps->update([
            'Tdoc' => $request->Tdoc,
            'Donominacion' => $request->Donominacion,
            'Observaciones' => $request->Observaciones
        ]);

        return redirect()->route('eps.index')
            ->with('success', 'EPS actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($NIS)
    {
        $eps = eps::findOrFail($NIS);
        $eps->delete();

        return redirect()->route('eps.index')
            ->with('success', 'EPS eliminada correctamente');
    }
}
