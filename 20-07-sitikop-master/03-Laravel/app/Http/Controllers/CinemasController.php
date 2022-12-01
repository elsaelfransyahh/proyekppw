<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Cinemas;
use DataTables;

class CinemasController extends Controller
{
    
    public function cinemas(){
        return cinemas::all();
    }

    public function index()
    {
        $cinemas = cinemas::orderBy('id')->get();
        return view('/cinemas', ['cinemas' => $cinemas]);

        // $cinemas = DB::table('cinemas')->get();

    }

    public function getcinemas()
    {
        $cinemas = cinemas::all();
        return Datatables::of($cinemas)->make(true);
    }
    // public function postcinemas()
    // {
    //     $cinemas = cinemas::all();
    //     return Datatables::of($cinemas)->make(true);
    // }

    public function create(Request $request)
    {
        $cinemas = new cinemas();
        $cinemas->Namacinema = $request->input('Namacinema');
        $cinemas->Lokasi= $request->input('Lokasi');
        $cinemas->JamBuka= $request->input('JamBuka');
        $cinemas->JamTutup= $request->input('JamTutup');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('data_file', $filename);
            $cinemas->file = $filename;

            } 
       else {
           return $request;  
           $cinemas->file ='';
       }
       $cinemas->save();

       return redirect('/cinemas')->with('cinemas',$cinemas);
   
    //    $cinemas->save();
    //     return response()->json($cinemas);
    // }


        // cinemas::create($request->all());
        //      return response()->json([
        //      'status' => 'ok',
        //      'message' => 'Data was created!'
        //  ], 201);

    } 
    

    public function update(Request $request,$id)
    {   
        $cinemas = cinemas::find($id);
        $cinemas->Namacinema = $request->input('Namacinema');
        $cinemas->Lokasi= $request->input('Lokasi');
        $cinemas->JamBuka= $request->input('JamBuka');
        $cinemas->JamTutup= $request->input('JamTutup');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('data_file', $filename);
            $cinemas->file = $filename;
    

                } 
        //    $cinemas->save();
        // return redirect('/cinemas');
        $cinemas->save();
        return response()->json([
            'status' => 'ok',
            'message' => 'Data was Update!'
        ], 200);
    }

    public function updatecinemas(Request $request,$id)
    {   
        $cinemas = cinemas::findOrFail($id);
        $cinemas->Namacinema = $request->input('Namacinema');
        $cinemas->Lokasi= $request->input('Lokasi');
        $cinemas->JamBuka= $request->input('JamBuka');
        $cinemas->JamTutup= $request->input('JamTutup');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('data_file', $filename);
            $cinemas->file = $filename;
    
    } 
           $cinemas->save();


        //return redirect('/cinemas');

        return response()->json([
            'status' => 'ok',
            'message' => 'Data was Update!'
        ], 201);
    }
    


    // public function updatecinemas(Request $request)
    // {   
    //     $cinemas = cinemas::find($request->id);
    //     $cinemas->Namacinema = $request->input('Namacinema');
    //     $cinemas->Lokasi= $request->input('Lokasi');
    //     $cinemas->JamBuka= $request->input('JamBuka');
    //     $cinemas->JamTutup= $request->input('JamTutup');
    //     if($request->hasFile('image')){
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . "." . $extension;
    //         $file->move('data_file', $filename);
    //         $cinemas->file = $filename;
    
    // } 
    //        $cinemas->save();
    //     return redirect('/cinemas');
    // }

    public function deletecinemas($id)
    {
        $cinemas = cinemas::find($id);  
        $result= $cinemas->delete();
        if($result)
        {
            return ["result"=>"record has been delete"];
        }
        else
        {
            return ["result"=>"delete operation is failed"];
        }
    }


    public function destroy($id)
    {
        $cinemas = cinemas::findOrFail($id);
        $cinemas->delete();
        return redirect('/cinemas');
    }
}