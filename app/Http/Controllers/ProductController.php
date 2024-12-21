<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('add-product');
    }

    public function createStore(Request $request){

         $validated = $request->validate([
            'product_id' => 'required|string',
            'name' => 'required|string',
            'product_type' => 'required|string',
            'selling_price' => 'required|numeric',
            'purchase_price' => 'required|numeric',
            'brand' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image_name=null;

        if(isset($request->image)){
            $image_name = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $image_name);
        }
        
        $product = new Product();

        $product->name = $request->name;
        $product->product_id = $request->product_id;
        $product->product_type = $request->product_type;
        $product->brand = $request->brand;
        $product->selling_price = $request->selling_price;
        $product->purchase_price = $request->purchase_price;
        $product->image = $image_name;

        $product->save();

        return redirect()->route('home')->with('success', 'Product created successfully');
    }

    public function editProduct($id){
        $product = Product::find($id);
        return view('edit-product', ["product" => $product]);
    }

     public function updateProduct($id, Request $request){
         $validated = $request->validate([
            'product_id' => 'required|string',
            'name' => 'required|string',
            'product_type' => 'required|string',
            'selling_price' => 'required|numeric',
            'purchase_price' => 'required|numeric',
            'brand' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::find($id);        
        
        $product->name = $request->name;
        $product->product_id = $request->product_id;
        $product->product_type = $request->product_type;
        $product->brand = $request->brand;
        $product->selling_price = $request->selling_price;
        $product->purchase_price = $request->purchase_price;

        if(isset($request->image)){
            $image_name = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $image_name);
            $product->image = $image_name;
        }
        
        $product->save();

        return redirect()->route('home')->with('success', 'Product updated successfully');
    }
     public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('home')->with('success', 'Product deleted successfully');
    }
}