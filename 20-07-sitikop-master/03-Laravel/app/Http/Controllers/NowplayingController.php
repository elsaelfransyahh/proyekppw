<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NowPlaying;
use DataTables;

class NowPlayingController extends Controller
{
     public function nowplaying(){
          return NowPlaying::all();
     }
  
    public function index()
    {
        $nowplaying = NowPlaying::all();
        return view('nowplaying', ['nowplaying' => $nowplaying]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getNowPlaying()
    {
       
        $nowplaying = NowPlaying::all();
        return Datatables::of($nowplaying)->make(true);
    }

    public function create(Request $request)
    {
        $nowplaying = new NowPlaying();
        $nowplaying->title = $request->input('title');
        $nowplaying->price = $request->input('price');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('data_file', $filename);
            $nowplaying->file = $filename;

            } 
       else {
           return $request;
           $nowplaying->file ='';
       }
      
       $nowplaying->save();
        return redirect('/nowplaying');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function addnowplaying(Request $request)
    {
        NowPlaying::create($request->all());
             return response()->json([
             'status' => 'ok',
             'message' => 'Data was created!'
         ], 200);
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, $id)

    // public function update(Request $request)
    // {   
    //     $nowplaying = NowPlaying::find($request->id);

    public function updatenowplaying(Request $request)
    {   
        $nowplaying = NowPlaying::find($request->id);
        $nowplaying->title = $request->input('title');
        $nowplaying->price = $request->input('price');
    {
        if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $file->move('data_file', $filename);
                $nowplaying->file = $filename;
    
                } 
           $nowplaying->save();
        return redirect('/nowplaying');
    } 

    {
        if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $file->move('data_file', $filename);
                $nowplaying->file = $filename;
    
                } 
           $nowplaying->save();
        return response()->json([
            'status' => 'ok',
            'message' => 'Data was Update!'
        ], 201);
    } 

        }    
        /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deletenowplaying($id)
    {
        $nowplaying = NowPlaying::find($id);  
        $result= $nowplaying->delete();
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
        $nowplaying = NowPlaying::findOrFail($id);
        $nowplaying->delete();
        return redirect('/nowplaying');
    }
}