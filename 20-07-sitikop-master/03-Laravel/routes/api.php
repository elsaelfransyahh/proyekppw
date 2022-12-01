<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NowplayingController;
use App\Http\Controllers\JoinMembershipController;
use App\Http\Controllers\CinemasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenjualantiketController;
use App\Http\Controllers\TransaksiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); 
});


Route::get("nowplaying",[NowplayingController::class,'nowplaying']);
Route::post("addnowplaying", [NowplayingController::class, 'addnowplaying']);
Route::put("updatenowplaying", [NowplayingController::class, 'updatenowplaying']);
Route::delete("deletenowplaying/{id}", [NowplayingController::class, 'deletenowplaying']);

Route::post("addnowplaying", [NowplayingController::class, 'addnowplaying']);
Route::put("updatenowplaying", [NowplayingController::class, 'updatenowplaying']);
Route::delete("deletenowplaying/{id}", [NowplayingController::class, 'deletenowplaying']);

Route::post("add", [NowplayingController::class, 'add']);
Route::put("update", [NowplayingController::class, 'update']);
Route::delete("delete/{id}", [NowplayingController::class, 'delete']);

Route::get("cinemas",[CinemasController::class,'cinemas']);
Route::post("addcinemas", [CinemasController::class, 'addcinemas']);
Route::put("updatecinemas", [CinemasController::class, 'updatecinemas']);
Route::delete("deletecinemas/{id}", [CinemasController::class, 'deletecinemas']);

//membership
Route::get("JoinMembership",[JoinMembershipController::class,'JoinMembership']);
Route::post("addJoinMembership", [JoinMembershipController::class, 'addJoinMembership']);
Route::put("updateMembership", [JoinMembershipController::class, 'updateMembership']);
Route::delete("delete/{id}", [JoinMembershipController::class, 'delete']);

//login
Route::post('postLogin',[LoginController::class,'create']);
Route::post("addregister",[RegisterController::class,'addregister']);





//penjualan tiket
Route::get("penjualantiket",[PenjualantiketController::class,'penjualantiket']);
Route::post("addpenjualantiket", [PenjualantiketController::class, 'addpenjualantiket']);
Route::post("addtiket", [PenjualantiketController::class, 'addtiket']);
Route::put("updatepenjualantiket", [PenjualantiketController::class, 'updatepenjualantiket']);
Route::delete("deletepenjualantiket/{id}", [PenjualantiketController::class, 'deletepenjualantiket']);

//transaksi
Route::get("Transaksi",[TransaksiController::class,'Transaksi']);
Route::post("addTransaksi", [TransaksiController::class, 'addTransaksi']);
Route::put("updateTransaksi", [TransaksiController::class, 'updateTransaksi']);
Route::delete("delete/{id}", [TransaksiController::class, 'delete']);
