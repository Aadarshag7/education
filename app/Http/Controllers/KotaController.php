<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKotaRequest;
use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kotas=Kota::all();
        return view('Kota.index',compact('kotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Kota.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKotaRequest $request)
    {
        Kota::create($request->validated());
        return redirect()->route('kota.index');
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
        $kota=Kota::findorFail($id);
        return view('Kota.edit',compact('kota'));
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
