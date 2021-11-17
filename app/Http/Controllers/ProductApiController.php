<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductApiController extends Controller
{
    public function index(){
         
        $products = Product::all();
        return response()->json(['message' => 'Success','data' => $products]);
    }

    public function show($id){
         
        $products = Product::find($id);
        return response()->json(['message' => 'Success','data' => $products]);
    }

    public function store(Request $request){
         
        $products = Product::create($request->all());
        return response()->json(['message' => 'Success','data' => $products]);
    }

    public function update(Request $request,$id){

        $products = Product::find($id); 
        $products -> update($request->all());
 
        return response()->json(['message' => 'Success','data' => $products]);
        
    }

    public function destroy($id){

        $products = Product::find($id);
        $products -> delete();
 
        return response()->json(['message' => 'Success','data' => null]);
        
    }
 
}
