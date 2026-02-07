<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRotaRequest;
use App\Models\Rota;
use Illuminate\Http\Request;

class RotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rotas=Rota::all();
        return response()->json([
            "success"=>"true",
            "data"=>$rotas
        ]);
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
    public function store(StoreRotaRequest $request)
    {
        $rotas=Rota::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$rotas
        ]);
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
