<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotaRequest;
use App\Http\Requests\UpdateHotaRequest;
use App\Models\Hota;
use Illuminate\Http\Request;

class HotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotas=Hota::all();
        return response()->josn([
            "success"=>"true",
            "data"=>$hotas
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
    public function store(StoreHotaRequest $request)
    {
        $hotas=Hota::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$hotas
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
    public function update(UpdateHotaRequest $request, string $id)
    {
        $hota=Hota::find($id);
        $hota->update($request->validated());
        return response()->josn([
            "success"=>"true",
            "data"=>$hota
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hota=Hota::findorFail($id);
        $hota->delete();
        return response()->josn([
            "success"=>"true",
            "data"=>$hota
        ]);
    }
}
