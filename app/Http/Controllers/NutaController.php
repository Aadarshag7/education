<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNutaRequest;
use App\Models\Nuta;
use Illuminate\Http\Request;

class NutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nutas=Nuta::all();
        return view('Nuta.index',compact('nutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Nuta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNutaRequest $request)
    {
        Nuta::create($request->validated());
        return redirect()->route('nuta.index');
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
        $nuta=Nuta::findorFail($id);
        return view('Nuta.edit',compact('nuta'));
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
