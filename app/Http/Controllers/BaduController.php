<?php

namespace App\Http\Controllers;

use App\Models\Badu;
use Illuminate\Http\Request;

class BaduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $badus=Badu::all();
        return view('Badu.index',compact('badus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Badu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Badu::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'photo'=>$request->photo
        ]);

        return redirect()->route('badu.index');
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
        $badus=Badu::find($id);
        return view('Badu.edit',compact('badus'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $badus=Badu::find($id);
        $badus->update($request->all());
        return redirect()->route('Badu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $badus=Badu::find($id);
        $badus->delete();
        return redirect()->route('Badu.index');
    }
}
