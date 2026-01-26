<?php

namespace App\Http\Controllers;

use App\Models\Dact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dacts=Dact::all();
        return view('Dact.index',compact('dacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dact::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'user_id'=>Auth::id()
        ]);

        return redirect()->route('dect.index');
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
        $dect=Dact::find($id);
        return view('Dact.edit',compact('dect'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dect=Dact::find($id);
        $dect->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
