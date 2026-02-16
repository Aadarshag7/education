<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRutaRequest;
use App\Http\Requests\UpdateRutaRequest;
use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rutas=Ruta::all();
        return view('Ruta.index',compact('rutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ruta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRutaRequest $request)
    {
        Ruta::create($request->validated());
        return redirect()->route('ruta.index');
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
    public function update(UpdateRutaRequest $request, string $id)
    {
        $ruta=Ruta::findorFail($id);
        $ruta->$request->validated();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
