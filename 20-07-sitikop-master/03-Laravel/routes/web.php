<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{JoinMembershipController,CinemasController,NowPlayingController,HomeController};
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/movie', function () {
    return view('movie');
});

Route::get('/cinema', function () {
    return view('cinema');
});


Route::get('/cinemas', function () {
    return view('cinemas');
});

Route::get('/detailcinema', function () {
    return view('detailcinema');
});

Route::get('/moviedetails', function () {
    return view('moviedetails');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/Membership', function(){
    return view('Membership');
});

Route::get('/JoinMembership', function(){
    return view('JoinMembership');
});

Route::get('/Homepage', function () {
    return view('Homepage');
});

Route::get('/penjualantiket', function () {
    return view('penjualantiket');
});

Route::get('/joinmemberships', function () {
    return view('joinmemberships');
});


/**=============================Nowplaying================================================== **/
Route::get('/nowplaying',[NowPlayingController::class, 'index']);
// Route::get('/nowplaying',[NowPlayingController::class, 'nowplaying']);
Route::post('/nowplaying/tambah', [NowPlayingController::class, 'create']);
Route::put('/nowplaying/update/{id}', [NowPlayingController::class , 'update']);
Route::get('/nowplaying/destroy/{nowplaying}', [NowPlayingController::class , 'destroy']);
Route::get('/ajaxdata/get-nowplaying',[NowPlayingController::class , 'getNowPlaying'])->name('ajaxdata.nowplaying');


/**===============Cinemas==============**/
Route::get('/cinemas',[CinemasController::class, 'index']);
Route::post('/cinemas/update/{id}', [CinemasController::class, 'update']);
Route::get('/cinemas/destroy/{cinemas}', [CinemasController::class, 'destroy']);
Route::post('/cinemas/tambah' , [CinemasController::class, 'create']);
Route::get('/ajaxdata/get-cinemas',[CinemasController::class, 'getcinemas'])->name('ajaxdata.cinemas');




/**==========================JoinMembership================================================== **/
Route::get('/joinmemberships',[JoinMembershipController::class, 'index']);
Route::post('/joinmemberships/tambah', [JoinMembershipController::class, 'create']);
Route::post('/joinmemberships/tambah' , [JoinMembershipController::class, 'create']);
Route::post('/joinmemberships/update/{id}', [JoinMembershipController::class, 'update']);
Route::get('/joinmemberships/destroy/{JoinMembership}', [JoinMembershipController::class, 'destroy']);
Route::get('/ajaxdata/get-joinmemberships',[JoinMembershipController::class, 'getjoinmemberships'])->name('ajaxdata.joinmemberships');




//Route::get('/register',[CinemasController::class, 'login']);
//Route::post('/register', [RegisterpController::class, 'Login']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::post('/register', 'App\Http\Controllers\RegisterController@storeUser')->name('register');

//         Route::get('', function () {
//             if(session('authenticated'))
//             {
//                 return view('index');
//             }
//             else
//             {
//                 return view('login');
//             }
//         });
//  Route::post('/login', [userController::class, 'login']);
