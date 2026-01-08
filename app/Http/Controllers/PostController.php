<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
        $this->middleware('auth');
        $this->middleware('permission:create post')->only(['create','store']);
        $this->middleware('permission:edit post')->only(['edit','update']);
        $this->middleware('permission:delete post')->only(['destroy']);
     }




    
    public function index()
    {
        $posts=Post::all();
        return view('Post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title'=>$request->name,
            'content'=>$request->content,
            'user_id'=>Auth::id()
        ]);

        return redirect()->roue('post.index');
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
    public function edit(Post $posts)
    {
        return view('Post.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $posts)
    {
        $posts->update($request->all());
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $posts)
    {
        $posts->delete();
        return redirect()->route('post.index');
    }
}
