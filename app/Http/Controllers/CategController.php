<?php

namespace App\Http\Controllers;

use App\Models\Categ;
use Illuminate\Http\Request;

class CategController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categs=Categ::all();
        return response()->json([
            "data"=>$categs
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
        $categs=Categ::create($request->all());
        return response()->json([
            "data"=>$categs
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
