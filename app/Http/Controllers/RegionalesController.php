<?php

namespace App\Http\Controllers;

use App\Models\regionales;
use Illuminate\Http\Request;

class RegionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regionales = regionales::all();
        return view('regionales.index', compact('regionales'));
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
    public function show(regionales $regionales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(regionales $regionales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, regionales $regionales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(regionales $regionales)
    {
        //
    }
}
