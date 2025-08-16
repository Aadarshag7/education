<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(){
        return view('auth.register');
    }
    


    public function registerSave(Request $request){
     User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
     ]);

     return redirect()->route('login');

    }

    public function login(){
        return view('login');

    
    }

    public function loginAction(Request $request){
          
    }  
    
        
    }
}
