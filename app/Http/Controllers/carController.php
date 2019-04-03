<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use Illuminate\Support\Facades\DB;
use Image;

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
            'image' => 'required|image'
        ]);
        //$request->image->store('public/images');
          


			$filenametostore=null;
			$destinationPath = null;

		      if($request->hasFile('image'))
		        {
		            $image=$request->file('image');
		            $ldate = date('Y-m-d H-i-s');
		            $filenamewithextension=$image->getClientOriginalName();
		            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
		            $extension = $image->getClientOriginalExtension();
		            $filenametostore = $filename.$ldate.".".$extension;
		                $destinationPath = public_path('contents/image/car');
		                $img = Image::make($image->getRealPath());
		                $img->resize(480, 480, function ($constraint) {
		                $constraint->aspectRatio();
		            })->save($destinationPath.'/'.$filenametostore);
		        }
		        $car= new Cars;

               $car->user_email= $request->session()->get('user')->email;
               $car->brand=$request->brand;
               $car->model=$request->model;
               $car->mileage=$request->mileage;
               $car->price=$request->price;
               $car->image=$filenametostore;
               $car->save();



               // $request->session()->put('cars', $car);
               return redirect('home')->with('response','Successfully Posted');
        
    }
    public function show(Request $request,$id){
       $car=Cars::find($id);
       return view('userhome.editpost')->with('car',$car);
     }
   
    public function update(Request $request,$id)
    {

      $filenametostore=null;
      $destinationPath = null;

          if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $ldate = date('Y-m-d H-i-s');
                $filenamewithextension=$image->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                $extension = $image->getClientOriginalExtension();
                $filenametostore = $filename.$ldate.".".$extension;
                    $destinationPath = public_path('contents/image/car');
                    $img = Image::make($image->getRealPath());
                    $img->resize(480, 480, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$filenametostore);
            }

      $car=Cars::find($id);
      $car->brand=$request->brand;
      $car->model=$request->model;
      $car->mileage=$request->mileage;
      $car->price=$request->price;
      $car->image=$filenametostore;

      $car->save();

    return redirect()->route('home');

    }
     public function delete(Request $request,$id)
    {
      $car=Cars::find($id);
      if($request->session()->get('user')->email == 'admin@admin.com')
      {
        return view('adminhome.deletepost')->with('car',$car);
      }
      return view('userhome.deletepost')->with('car',$car);
    }
    public function destroy(Request $request)
    {

      Cars::destroy($request->cid);
      if($request->session()->get('user')->email == 'admin@admin.com')
      {
        return redirect()->route('adminhome.posts');
      }
      return redirect()->route('home');
    }

}
