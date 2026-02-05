<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreYinaRequest;
use App\Models\Yina;
use Illuminate\Http\Request;

class YinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yinas=Yina::all();
        return response()->json([
            "success"=>"true",
            "data"=>$yinas
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
    public function store(StoreYinaRequest $request)
    {
        $yinas=Yina::create($request->validated());
        return response()->json([
            "success"=>"true",
            "data"=>$yinas
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
        $yina=Yina::findorFail($id);
        $yina->update(
            
        )
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
