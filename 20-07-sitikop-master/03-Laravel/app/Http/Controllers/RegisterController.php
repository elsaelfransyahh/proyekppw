<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
  //   public function register()
  // {
  //   return view('register');
  // }

  public function addregister(Request $request){
    // User::create($request->all());
    //          return response()->json([
    //          'status' => 'ok',
    //          'message' => 'Data was created!'
    //      ], 201);

        User::create($request->all());
             return response()->json([
             'status' => 'ok',
             'message' => 'Data was created!'
         ], 201);

  }
  public function getregister(Request $request)
  {
      $request->validate([
          'username' => 'required|string|max:24',
          'email' => 'required|string|email|max:64|unique:users',
          'password' => 'required|string|confirmed',
          'password_confirmation' => 'required',
      ]);
      User::create([
          'username' => $request->username,
          'email' => $request->email,
          'password' => $request->password,
          'password_confirmation' => $request->password_confirmation,
          

      ]);
      return redirect('login');
    }
    public function getUser()
    {
        $user = User::get();
        return response()->json($user);
    }
  }
