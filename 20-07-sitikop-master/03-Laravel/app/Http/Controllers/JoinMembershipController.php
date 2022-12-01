<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\JoinMembership;
use DataTables;

class JoinMembershipController extends Controller
{
    
    public function JoinMembership(){
        return JoinMembership::all();
    }

   public function index()
    {
        $_join_membership = JoinMembership::Orderby('id')->get();
        return view('/joinmemberships', ['JoinMembership' => $_join_membership]);

        $_join_membership = DB::table('_join_membership')->get();

    }

    public function getJoinMembership()
    {
       
        $_join_membership = JoinMembership::all();
        return Datatables::of($_join_membership)->make(true);
    }

    public function create(Request $request)
    {
        $_join_membership = new JoinMembership();
        $_join_membership->id = $request->input('id');
        $_join_membership->gender = $request->input('gender');
        $_join_membership->email = $request->input('email');
        $_join_membership->phone_number = $request->input('phone_number');
        $_join_membership->banking = $request->input('banking');
        $_join_membership->operator = $request->input('operator');
        $_join_membership->name_membership = $request->input('name_membership');
        $_join_membership->membership_type = $request->input('membership_type');
        $_join_membership->save();
       return redirect('/joinmemberships')->with('JoinMembership',$_join_membership);

       //$_join_membership->save();
        //return response()->json($_join_membership);
    }
    public function store(Request $request)
    {
        //
    }


    public function addJoinMembership(Request $request){
         JoinMembership::create($request->all());
             return response()->json([
             'status' => 'ok',
             'message' => 'Data was created!'
         ], 201);
    }
        
    public function updateMembership(Request $request)
    {   
        $_join_membership = JoinMembership::find($request->id);
        //$_join_membership->id = $request->input('id');
        $_join_membership->gender = $request->input('gender');
        $_join_membership->email = $request->input('email');
        $_join_membership->phone_number = $request->input('phone_number');
        $_join_membership->banking = $request->input('banking');
        $_join_membership->operator = $request->input('operator');
        $_join_membership->name_membership = $request->input('name_membership');
        $_join_membership->membership_type = $request->input('membership_type');
       

           $_join_membership->save();
           return redirect('/joinmemberships');
    }

    public function delete($id)
    {
        $_join_membership = JoinMembership::find($id);  
        $result= $_join_membership->delete();
        if($result)
        {
            return ["result"=>"record has been delete"];
        }
        else
        {
            return ["result"=>"delete operation is failed"];
        }
    }


    public function destroy(Request $request, JoinMembership $_join_membership)
    {
       JoinMembership::destroy($_join_membership->id);
        return redirect('/joinmemberships');
    }
}