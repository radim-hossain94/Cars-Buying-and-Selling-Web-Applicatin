<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class adminhomeController extends Controller
{
    //
      public function index(Request $request){
   	  $user = users::all();
         
        return view('adminhome.index')->with('user',$user);
        
   }
}
