<?php

namespace App\Http\Controllers;

use App\Models\Aadu;
use Illuminate\Http\Request;

class AaduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aadus=Aadu::all();
        return view('Aadu.index',compact('aadus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('Aadu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
        
        Aadu::create([
            'name'=>$request->name,
            'price'=>$request->price
        ]);
        return  redirect()->route('aadu.index');
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
        $aadus=Aadu::find($id);
        return view('Aadu.edit',compact('aadus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aadus=Aadu::find($id);
        $aadus->update($request->all());
        return redirect()->route('aadu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aadus=Aadu::find($id);
        $aadus->delete();
        return redirect()->route('aadu.index');
    }
}
