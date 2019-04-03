<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

class showUserController extends Controller
{
    //
      public function show(Request $request,$email){
       $user=users::where('email',$email)->first();
       return view('userhome.profile')->with('user',$user);
     }

    public function edit(Request $request,$email)
    {

      $user=users::where('email',$email)->first();

      return view('userhome.edit')->with('user',$user);

    }

    public function update(Request $request,$email)
    {

      $user=users::where('email',$email)->first();
      // dd($user);
       $user->name=$request->name;
       //$user->email=$request->email;
       $user->password=$request->password;
       $user->save();
       $user=users::where('email',$email)->first();
       $request->session()->put('user',$user);

     return redirect()->route('home');

    }
}
