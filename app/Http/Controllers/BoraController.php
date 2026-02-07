<?php

namespace App\Http\Controllers;

use App\Models\Bora;
use Illuminate\Http\Request;

class BoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boras=Bora::all();
        return view('Bora.index',compact('boras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Bora.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $validate=$request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);
       Bora::create([
        'name'=>$request->name,
        'price'=>$request->price
       ]);

       return redirect()->route('bora.index');
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
