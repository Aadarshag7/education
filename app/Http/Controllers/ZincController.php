<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZincRequest;
use App\Http\Requests\UpdateZincRequest;
use App\Models\Zinc;
use Illuminate\Http\Request;

class ZincController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zincs=Zinc::all();
        return response()->json([
            "success"=>"true",
            "data"=>$zincs
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
    public function store(StoreZincRequest $request)
    {
        $zincs=Zinc::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$zincs
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
    public function update(UpdateZincRequest $request, string $id)
    {
        $zinc=Zinc::findorFail($id);
        $zinc->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$zinc
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
