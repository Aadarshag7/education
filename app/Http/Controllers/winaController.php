<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWinaRequest;
use App\Http\Requests\UpdateWinaRequest;
use App\Models\Wina;
use Illuminate\Http\Request;

class winaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $winas=Wina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$winas
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
    public function store(StoreWinaRequest $request)
    {
        $winas=Wina::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$winas
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
    public function update(UpdateWinaRequest $request, string $id)
    {
        $wina=Wina::findorFail($id);
        $wina->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$wina
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
