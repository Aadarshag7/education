<?php

namespace App\Http\Controllers;

use App\Models\Pita;
use Illuminate\Http\Request;

class PitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pitas=Pita::all();
        return view('Pita.index',compact('pitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pita.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
