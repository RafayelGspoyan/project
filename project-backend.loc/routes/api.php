<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/user",function (Request $request){
   return response()->json([
       "success" => true,
       "data"=> [
         "info" => "info",
         "info2" => "info",
         "info3" => "info",
         "info4" => "info",
         "info5" => "info"
       ]
   ]) ;
});

Route::post("/user",function (Request $request){
    return response()->json([
        "success" => true,
        "data"=> [
            "info" => "info",
            "info2" => "info",
            "info3" => "info",
            "info4" => "info",
            "info5" => "info"
        ]
    ]) ;
});

//
Route::get("/product","ProductController@index")->name("products");
Route::get("/product/show/{id}","ProductController@show")->name("products.show");
Route::get("/product/delete/{id}","ProductController@delete")->name("products.delete");
