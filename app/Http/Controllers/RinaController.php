<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRinaRequest;
use App\Models\Rina;
use Illuminate\Http\Request;

class RinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rinas=Rina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$rinas
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
    public function store(StoreRinaRequest $request)
    {
        $rinas=Rina::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$rinas
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
