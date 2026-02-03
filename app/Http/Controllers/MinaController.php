<?php

namespace App\Http\Controllers;

use App\Models\Mina;
use Illuminate\Http\Request;

class MinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minas=Mina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$minas
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
    public function store( $request)
    {
        $minas=Mina::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$minas
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
    public function update( $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
