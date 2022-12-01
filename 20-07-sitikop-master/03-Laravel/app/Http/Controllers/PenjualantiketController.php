<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Models\penjualantiket;
use DataTables;
use App\Http\Controllers\PenjualantiketController;

class PenjualantiketController extends Controller
{
    public function penjualantiket(){
        return penjualantiket::all();
   }

  public function index()
  {
      $penjualantiket = penjualantiket::Orderby('id')->get();
      return view('/penjualantiket', ['penjualantiket' => $penjualantiket]);
  }

  public function getpenjualantiket()
  {
     
      $penjualantiket = penjualantiket::all();
      return Datatables::of($penjualantiket)->make(true);
  }

  public function create(Request $request)
  {
      $penjualantiket = new penjualantiket();
      $penjualantiket->title = $request->input('title');
      $penjualantiket->price = $request->input('price');
      $penjualantiket->stock = $request->input('stock');

      $penjualantiket->save();
        return response()->json($penjualantiket);
   }

  public function addpenjualatiket(Request $request)
  {
    penjualantiket::create($request->all());
           return response()->json([
           'status' => 'ok',
           'message' => 'Data was created!'
       ], 201);
  }

  
     public function update(Request $request)
     {   
    $penjualantiket = penjualantiket::find($request->id);
    $penjualantiket->title = $request->input('title');
    $penjualantiket->price = $request->input('price');
    $penjualantiket->stock = $request->input('price');

    $penjualantiket->save();
    return redirect('/penjualantiket');
  } 

  public function updatepenjualantiket(Request $request)
  {   
        $penjualantiket = penjualantiket::find($request->id);
        $penjualantiket->title = $request->input('title');
        $penjualantiket->price = $request->input('price');
        $penjualantiket->stock = $request->input('stock');

        $penjualantiket->save();
           return response()->json([
            'status' => 'ok',
            'message' => 'Data was Update!'
        ], 201);
  }
  public function addtiket(Request $request)
  {   
        $penjualantiket = new penjualantiket();
        $penjualantiket->title = $request->input('title');
        $penjualantiket->price = $request->input('price');
        $penjualantiket->stock = $request->input('stock');

        $penjualantiket->save();
           return response()->json([
            'status' => 'ok',
            'message' => 'Data was Created!'
        ], 201);
  }

 
  public function deletepenjualantiket($id)
  {
      $penjualantiket = penjualantiket::find($id);  
      $result= $penjualantiket->delete();
      if($result)
      {
          return ["result"=>"record has been delete"];
      }
      else
      {
          return ["result"=>"delete operation is failed"];
      }
  }
   
  public function destroy(Request $request, penjualantiket $penjualantiket)
  {
    penjualantiket::destroy($penjualantiket->id);
      return redirect('/penjualantiket');
  }
}
