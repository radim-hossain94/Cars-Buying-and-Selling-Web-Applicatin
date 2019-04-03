<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;

class RegistersController extends Controller
{
    //
     public function register(Request $request){
     	return view('Register.index');
     }
    public function registerPost(Request $request){
    	       
    	 
               $this->validate( $request,[
               	'name'=>'required',
               	'email'=>'required|email|unique:users',
               	'password'=>'required',
               	'confirmPassword'=>'required|same:password',
               ]);
             // return 'success';
               $user= new users;
               $user->name=$request->input('name');
               $user->email=$request->input('email');
               $user->password=$request->input('password');
               $user->confirmPassword=$request->input('confirmPassword');
               $user->save();

               $request->session()->put('users', $user);
               return redirect('/')->with('response','Successfully Registerred');
               
               
    }
}
