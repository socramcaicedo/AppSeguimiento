<?php

namespace App\Http\Controllers;

use App\Models\entecomformadores;
use Illuminate\Http\Request;

class EntecomformadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ente = entecomformadores::all();
        return view('enteconformador.index', compact('ente'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(entecomformadores $entecomformadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entecomformadores $entecomformadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entecomformadores $entecomformadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entecomformadores $entecomformadores)
    {
        //
    }
}
