<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

use App\Models\Categories;


class AdminController extends Controller
{
    public function admin(){
       $products = Products::all();

       $categories = Categories::all();

      return view('adminPages/admin', compact('products' ,'categories'));
    }

    public function addProduct(Request $request){
       $product = new Products();

        $product->name = $request->get('name_en');

        $product->price = $request->get('Price');

       // $product->image = $request->get('Product_Image');

        if($request->hasFile('Product_Image')){

          $file = $request->file('Product_Image');

          $image_name = time().$file->getClientOriginalName();

          $image_path = 'images/Product_Image/';
          
          $file->move($image_path,$image_name);

          $imagee = $image_path.$image_name;

          $product->image = $imagee;

        }
        
        $product->category_id = $request->get('category');

        $product->save();

        return back();

    }

    public function product_edit($product_id){

       $products = Products::all();

       $categories = Categories::all();

       $product = Products::find($product_id);

       return view('adminPages/admin', compact('products','product','categories'));



    }

    public function update_product(Request $request,$product_id)
    {
       $product = Products::find($product_id);

        $product->name = $request->get('name_en');

        $product->price = $request->get('Price');

        if($request->hasFile('Product_Image')){

          $file = $request->file('Product_Image');

          $image_name = time().$file->getClientOriginalName();

          $image_path = 'images/Product_Image/';
          
          $file->move($image_path,$image_name);

          $imagee = $image_path.$image_name;

          $product->image = $imagee;

        }

        $product->category_id = $request->get('category');

        $product->save();

        return redirect()->route('admin');
    }


    public function delete_product($product_id){
      
       $product = Products::find($product_id);

       $product->delete();

       return back();

    }

    public function clothes(){

       $products = Products::all();

       $categories = Categories::all();

       return view('clothes', compact('products','categories'));
    }

        public function accessories(){

       $products = Products::all();

       $categories = Categories::all();

       return view('accessories', compact('products','categories'));
    }


        public function wooden_toys(){

       $products = Products::all();

       $categories = Categories::all();

       return view('wooden-toys', compact('products','categories'));
    }


        public function furniture(){

       $products = Products::all();

       $categories = Categories::all();

       return view('furniture', compact('products','categories'));
    }

    public function carpets(){

       $products = Products::all();

       $categories = Categories::all();

       return view('carpets', compact('products','categories'));
    }


        public function paintings(){

       $products = Products::all();

       $categories = Categories::all();

       return view('paintings', compact('products','categories'));
    }


        public function details($product_id){
      
       $product = Products::find($product_id);

       return view('details', compact('product'));
    }
}
