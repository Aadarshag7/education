<?php

namespace App\Http\Controllers;


use App\Models\Fir;
use Illuminate\Http\Request;

class FersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fers=Fir::all();
        return view('fers.index',compact('fers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fers.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {
          
        Fir::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]);

        return redirect()->route('index');
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
        $fers=Fir::find($id);
        return view('fers.edit',compact('fers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fers=Fir::find($id);
        $fers->update($request->all());
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
