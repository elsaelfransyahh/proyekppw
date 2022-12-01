<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use DataTables;

class TransaksiController extends Controller
{
    
    public function Transaksi(){
        return Transaksi::all();
    }

    public function index()
    {
        $_transaksi = Transaksi::Orderby('id')->get();
        return view('/Transaksi', ['Transaksi' => $_transaksi]);

    }

    public function getTransaksi()
    {
       
        $_transaksi = Transaksi::all();
        return Datatables::of($_transaksi)->make(true);
    }

    public function create(Request $request)
    {
        $_transaksi = new Transaksi();
        $_transaksi->id = $request->input('id');
        $_transaksi->nama = $request->input('nama');
        $_transaksi->jumlah_order = $request->input('jumlah_order');
        $_transaksi->harga = $request->input('harga');
       
      
        $_transaksi->save();
        return response()->json($_transaksi);
    }
    public function store(Request $request)
    {
        //
    }


    public function addTransaksi(Request $request){
        Transaksi::create($request->all());
             return response()->json([
             'status' => 'ok',
             'message' => 'Data was created!'
         ], 201);
    }
        
    public function updateTransaksi(Request $request)
    {   
        $_transaksi = Transaksi::find($request->id);
        //$_transaksi->id = $request->input('id');
        $_transaksi->nama = $request->input('nama');
        $_transaksi->jumlah_order = $request->input('jumlah_order');
        $_transaksi->harga = $request->input('harga');

        $_transaksi->save();
           return response()->json([
            'status' => 'ok',
            'message' => 'Data was Update!'
        ], 201);

    }

    public function delete($id)
    {
        $_transaksi = Transaksi::find($id);  
        $result= $_transaksi->delete();
        if($result)
        {
            return ["result"=>"record has been delete"];
        }
        else
        {
            return ["result"=>"delete operation is failed"];
        }
    }


    public function destroy(Request $request, Transaksi $_transaksi)
    {
        Transaksi::destroy($_transaksi->id);
        return redirect('/Transaksi');
    }
}