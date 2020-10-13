<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json([
            "data"=> [
                $products
            ]
        ]) ;
    }
    public function show($id){
            $product = Product::find($id);
        return response()->json([
            "data"=> [
                $product
            ]
        ]) ;
    }
    public function delete($id){
        $products = Product::find($id)->delete();
        return redirect()->route("") ;
    }
}
