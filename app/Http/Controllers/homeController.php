<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class homeController extends Controller
{
    //
    public function index(){
    $car=Cars::all();
    // dd($car);
   	return view('userhome.index')->with('car',$car);
   }
}
