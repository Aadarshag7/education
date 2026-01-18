<?php

namespace App\Http\Controllers;

use App\Models\Sect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $sects=Sect::all();
      return view('Sect.index',compact('sects'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sect.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sect::create([
            'name'=>$request->name,
            'date'=>$request->date,
            'user_id'=>Auth::id()
        ]);

        return redirect()->route('Sect.index');
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
    public function edit(Sect $sect)
    {
        return view('Sect.edit',compact('sect'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sect $sect)
    {
        $sect->update($request->all());
        return redirect()->route('sect.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sect $sect)
    {
        $sect->delete();
        return redirect()->route('sect.index');
    }
}
