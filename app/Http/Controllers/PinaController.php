<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePinaRequest;
use App\Http\Requests\UpdateDinaRequest;
use App\Models\Pina;
use Illuminate\Http\Request;

class PinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinas=Pina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$pinas

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
    public function store(StorePinaRequest $request)
    {
       $pinas=Pina::create($request->validated());
       return response()->json([
        "success"=>"true",
        "data"=>$pinas
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
        $pina=Pina::findorFail($id);
        $pina->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$pina
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pina=Pina::findorFail($id);
        $pina->delete();
        return response()->json([
            "success"=>"true",
            "data"=>$pina
        ]);
    }
}
