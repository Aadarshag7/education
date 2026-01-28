<?php

namespace App\Http\Controllers;

use App\Models\Fast;
use Illuminate\Http\Request;

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
          dd($request->all());
        Fast::create([
            'name'=>$request->name,
            'price'=>$request->price,


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
