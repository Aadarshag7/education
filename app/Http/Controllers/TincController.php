<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTincRequest;
use App\Http\Requests\UpdateTincRequest;
use App\Models\Tinc;
use Illuminate\Http\Request;

class TincController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tincs=Tinc::all();
        return response()->json([
            "success"=>"true",
            "data"=>$tincs
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
    public function store(StoreTincRequest $request)
    {
        $tincs=Tinc::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$tincs
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
    public function update(UpdateTincRequest $request, string $id)
    {
        $tinc=Tinc::findorFail($id);
        $tinc->update($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$tinc
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
