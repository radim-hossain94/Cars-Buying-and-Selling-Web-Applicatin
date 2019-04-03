<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
{
    //
    public function show(Request $request){
    	$car = DB::select('select brand,COUNT(*) from Cars group by brand order by COUNT(*) desc');

    	// dd($car[0]->count());
     	return view('common.brandPop')->with('car',$car);
     }
}
