<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSinaRequest;
use App\Http\Requests\UpadateSinaRequest;
use App\Models\Sina;
use Illuminate\Http\Request;

class SinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinas=Sina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$sinas
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
    public function store(StoreSinaRequest $request)
    {
        $sinas=Sina::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$sinas
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
    public function update(UpadateSinaRequest $request, string $id)
    {
        $sina=Sina::findorFail($id);
        $sina->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$sina
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
