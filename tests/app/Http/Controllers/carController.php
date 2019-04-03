<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use Illuminate\Support\Facades\DB;

class carController extends Controller
{

    //
     public function sell(Request $request){
   	  
        return view('userhome.sell');
    }
     public function sellPost(Request $request){
   	    $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'mileage' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);
          $car= new Cars;
               $car->brand=$request->input('brand');
               $car->model=$request->input('model');
               $car->mileage=$request->input('mileage');
               $car->price=$request->input('price');
               $car->image=$request->input('image');
               $car->save();

               $request->session()->put('cars', $car);
               return redirect('/')->with('response','Successfully Registerred');
        
    }
}
