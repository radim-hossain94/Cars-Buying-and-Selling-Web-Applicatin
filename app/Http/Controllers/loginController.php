<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\Cars;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    //
     public function login(Request $request){
     	return view('login.index');
     }
      public function loginPost(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = users::where(['password'=>$request->password,'email'=> $request->email])->first();

// dd($user);
        if($user)
    	{
    		if( $user->email =='admin@admin.com')
	        {
	            // dd($user->password);
	            $request->session()->put('user', $user);
	           // $request->session()->put('user_email', $user->email);

	          return redirect()->intended("adminhome");
	        }
	        else{

	            $request->session()->put('user', $user);
	            return redirect()->intended("home");
	        }
	    }
        else
        {
            return view("login.index")->with('error','User Name or Password incorrect');
        }

    }

}
