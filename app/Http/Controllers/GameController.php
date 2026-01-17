<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('permission:create game')->only(['create','store']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games=Game::all();
        return view('Game.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Game::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'user_id'=>Auth::id()
        ]);

        return redirect()->route('game.index');
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
    public function edit(Game $game)
    {
        
        return view('Game.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('game.index');
    }

    /**
     * 
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('game.index');
    }
}
