<?php

namespace App\Http\Controllers;

use App\Models\Fast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasts=Fast::all();
        return view('Fast.index',compact('fasts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Fast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
          
        Fast::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'user_id'=>Auth::id()


        ]);

        return redirect()->route('fast.index');
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
        $fast=Fast::find($id);
        return view('Fast.edit',compact('fast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fast=Fast::find($id);
        $fast->update($request->all());
        return redirect()->route('Fast.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fast=Fast::find($id);
        $fast->delete();
        return redirect()->route('fast.index');

    }
}
