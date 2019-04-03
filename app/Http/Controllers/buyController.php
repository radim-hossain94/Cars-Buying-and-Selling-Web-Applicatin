<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

use App\Cars;

class buyController extends Controller
{
    public function buy(Request $request,$id){

      $user=Cars::find($id);
      return view('userhome.buy')->with('user',$user);;

    }
    public function destroy(Request $request,$id)
    {


      //users::where('email', $request->uemail)->delete();
      Cars::destroy($request->uid);
      return redirect('home');
    }
}
