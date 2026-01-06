<?php

namespace App\Http\Controllers;

use App\Models\Rame;
use Illuminate\Http\Request;

class RameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rames=Rame::all();
        return view('Rame.index',compact('rames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Rame.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rames=Rame::create([
            'name'=>$request->name,
            'price'=>$request->price
        ]);
    //    $path=null;
       if($request->hasFile('photo')){
        foreach($request->file('photo')as $file){
        $path=$file->store('photos','public');
        $rames->images()->create([
            'path'=>$path,
        ]);


        }
       
    }
    return redirect()->route('rame.index');
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

