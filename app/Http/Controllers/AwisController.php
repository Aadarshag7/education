<?php

namespace App\Http\Controllers;

use App\Models\Awis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AwisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awis=Awis::all();
        return view('Awis.index',compact('awis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Awis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        // dd($request->all());
        Awis::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'user_id'=>Auth::id()
        ]);

        return redirect()->route('awis.index');
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
        return view('Awis.edit');
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
