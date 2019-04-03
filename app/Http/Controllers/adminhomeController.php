<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\Cars;

class adminhomeController extends Controller
{
    //
      public function index(Request $request){
   	  $user = users::all();

        return view('adminhome.index')->with('user',$user);

   }

   public function delete(Request $request,$email){
     $user=users::where('email', $email)->first();

     // $user->delete();
     // $user = users::all();
     return view('adminhome.delete')->with('user',$user);
   }

   public function destroy(Request $request)
   {

     Cars::where('user_email', $request->uemail)->delete();
     users::where('email', $request->uemail)->delete();

     return redirect('adminhome');
   }
   
     public function allpost(Request $request)
   {
    $car=Cars::all();
    return view('adminhome.posts')->with('car',$car);
   }
}
