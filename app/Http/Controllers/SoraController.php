<?php

namespace App\Http\Controllers;

use App\Http\Resources\SoraResource;
use App\Models\Sora;
use Illuminate\Http\Request;

class SoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soras=SoraResource::collection(Sora::all());
        return response()->json([
            "success"=>"true",
            "data"=>$soras
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
    public function store(Request $request)
    {
        $soras=Sora::create($request->all());
        return response()->json([
            "success"=>"true",
            "data"=>$soras
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
