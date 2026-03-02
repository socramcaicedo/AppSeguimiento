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
    public function show(intructores $intructores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(intructores $intructores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, intructores $intructores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(intructores $intructores)
    {
        //
    }
}
