<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Providers\RouteServiceProvider; 
//use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use DB; 
use App\Models\User; 
use Symfony\Component\HttpKernel\Event\ResponseEvent; 
 
class LoginController extends Controller 
{ 
    public function Login(){ 
        return User::all(); 
    } 
  // if($request->user_role == 1){ 
                //     session(['user_role' => 'Admin']); 
                // }else if($request->user_role == 0){ 
                //     session(['user_role' => 'user']); 
                // } 
    public function create(Request $request) 
    { 
        $data = User::where('email', $request->email)->first(); 
        if($data) 
        { 
            if($data->password == $request->password) 
            { 
                session(['authenticated' => true]); 
                session(['email' => $data->email]); 
                return response()->json([ 
                    'status' => '200', 
                    'message' => 'OK!' 
                ], 200); 
            }
            else { 
                return response()->json([ 
                    'message'=>'Password anda Salah', 
                    'status' => '401' 
                ],401); 
            } 
        } 
        return response()->json([ 
            'message'=> 'Email Yang anda Masukan salah', 
        ],401); 
    } 
     
    // return redirect('/login')->with('message','Username atau Password salah'); 
    public function postlogin(Request $request){ 
        User::create($request->all()); 
                 return response()->json([ 
                 'status' => '200', 
                 'message' => 'OK!' 
             ], 200); 
     
      } 
 
    //   public function postlogin(Request $request) 
    //   { 
    //       User::create([ 
    //           'name' => $request->name, 
    //           'email' => $request->email, 
    //           'email_verified_at' => $request->email_verified_at, 
    //           'password' => $request->password, 
               
     
    //       ]); 
          //return redirect('login'); 
      //} 
 
 
    public function logout(Request $request) 
    { 
        $request->session()->flush(); 
        return redirect('/login'); 
    } 
} 
 
// class LoginController extends Controller 
// { 
//     public function Login(){ 
//         return User::all(); 
//     } 
 
//     public function create(Request $request) 
//     { 
//         $data = User::where('username', $request->username)->first(); 
//         if($data) 
//         { 
//             if($data->password == $request->password) 
//             { 
//                 session(['authenticated' => true]); 
//                 session(['username' => $data->username]); 
//                 if($request->user_role == 1){ 
//                     session(['user_role' => 'Admin']); 
//                 }else if($request->user_role == 0){ 
//                     session(['user_role' => 'User']); 
//                 } 
//                 return redirect('/'); 
//             } 
//         } 
//         return redirect('/login')->with('message','Username atau Password salah'); 
//     } 
 
//     public function logout(Request $request) 
//     { 
//         $request->session()->flush(); 
//         return redirect('/login'); 
//     } 
 
//     }