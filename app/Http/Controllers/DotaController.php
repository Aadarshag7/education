<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDotaRequest;
use App\Http\Requests\UpdateDotaRequest;
use App\Models\Dota;
use Illuminate\Http\Request;

class DotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dotas=Dota::all();
        return view('Dota.index',compact('dotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDotaRequest $request)
    {
        Dota::create($request->validated());
        return redirect()->route('dota.index');
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
        $dota=Dota::findorFail($id);
        return view('Dota.edit',compact('dota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDotaRequest $request, string $id)
    {
        $dota=Dota::findorFail($id);
        $dota->update($request->validated());
        return redirect()->route('dota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dota=Dota::findorFail($id);
        $dota->delete();
        return redirect()->route('dota.index');
    }
}
