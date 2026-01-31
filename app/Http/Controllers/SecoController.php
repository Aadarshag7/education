<?php

namespace App\Http\Controllers;

use App\Models\Seco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secos=Seco::all();
        return view('Seco.index',compact('secos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Seco.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
    
        Seco::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'user_id'=>Auth::id()
        ]);
        return redirect()->route('seco.index');
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
        $seco=Seco::find($id);
        return view('Seco.edit',compact('seco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        // dd($request->all());
        $seco=Seco::find($id);
        $seco->update($request->all());
        return redirect()->route('seco.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
