<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
      
        return view ('auth.register');
    }

    public function store(Request $request){
        $this->validate($request,['name'=>'required|max:255',
        'password'=>'required|confirmed',
         'email'=>'required|email|unique:users,email',
        
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('dashboard');
    }
}