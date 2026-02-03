<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDinaRequest;
use App\Http\Requests\UpdateDinaRequest;
use App\Models\Dina;
use Illuminate\Http\Request;

class DinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dinas=Dina::all();
        return response()->json([
            "sucsess"=>"true",
            "data"=>$dinas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDinaRequest $request)
    {
        
        $dinas=Dina::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$dinas
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
    public function update(UpdateDinaRequest $request, string $id)
    {
        $dina=Dina::findorFail($id);
        $dina->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$dina
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dina=Dina::findorFail($id);
        $dina->delete();
        return response()->json([
            "success"=>"true"
        ],204);
    }
}
