<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Image;
class Livesearch extends Controller
{
  function index()
  {
   return view('search.live_search');
  }

  function action(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = DB::table('cars')
       ->where('brand', 'like', '%'.$query.'%')
       //->orderBy('CustomerID', 'desc')
       ->get();

    }
    else
    {
     $data = DB::table('cars')
       ->orderBy('id', 'desc')
       ->get();
    }
    $total_row = $data->count();
    if($total_row > 0)
    {
     foreach($data as $row)
     {
      $output .= '
      <tr>
       <td>'.$row->brand.'</td>
       <td>'.$row->model.'</td>
       <td>'.$row->mileage.'</td>
       <td>'.$row->price.'</td>
       <td><img width="80px" height="65px" src="/contents/image/car/'.$row->image.'"></td>



      </tr>
      ';
     }
    }
    else
    {
     $output = '
     <tr>
      <td align="center" colspan="5">No Data Found</td>
     </tr>
     ';
    }
    $data = array(
     'table_data'  => $output,
     'total_data'  => $total_row
    );

    echo json_encode($data);
   }
  }
}
