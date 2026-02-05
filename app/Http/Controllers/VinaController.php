<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVinaRequest;
use App\Http\Requests\UpdateVinaRequest;
use App\Models\Vina;
use Illuminate\Http\Request;

class VinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vinas=Vina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$vinas
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
    public function store(StoreVinaRequest $request)

    {
       $vinas=Vina::create($request->validated());
       return response()->json([
        "success"=>"true",
        "data"=>$vinas
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
    public function update(UpdateVinaRequest $request, string $id)
    {
        $vina=Vina::findorFail($id);
        $vina->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$vina
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vina=Vina::findorFail($id);
        $vina->delete();
        return response()->json([
            "success"=>"true",
        
        ]);
    }
}
