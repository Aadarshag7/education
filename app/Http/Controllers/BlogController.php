<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('permission:create blog')->only(['create','store']);


    }
  

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('Blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   
     {
        
        Blog::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'user_id'=>Auth::id()
        ]);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blogs)
    {
        return view('Blog.edit',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blogs)
    {
         return view('Blog.edit',compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blogs)
    {
        $blogs->update($request->all());
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blogs)
    {
        $blogs->delete();
        return redirect()->route('badu.index');
    }
}
