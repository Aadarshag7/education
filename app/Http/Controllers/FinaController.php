<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinaRequest;
use App\Http\Requests\UpdateFinaRequest;
use App\Models\Fina;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;

class FinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $finas=Fina::all();
        return response()->json([
            "success"=>true,
            "data"=>$finas
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
    public function store(StoreFinaRequest $request)
    {
        $finas=Fina::create($request->validated());
        return response()->json([
         "success"=>true,
         "data"=>$finas
        ],201);
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
    public function update(UpdateFinaRequest $request, string $id)
    {
        $fina=Fina::findorFail($id);
        $fina->update($request->validated());
        return response()->json([
            "success"=>true,
            "data"=>$fina
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
