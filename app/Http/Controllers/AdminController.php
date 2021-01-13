<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

use App\Models\Categories;

use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function admin(){
       $products = Products::all();

       $categories = Categories::all();

      return view('adminPages/admin', compact('products' ,'categories'));
    }
   
   protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'name_en' => ['required', 'string', 'max:255','regex:/^[a-zA-Z ]+$/u'],
            'Price' => ['required'],
            'Product_Image' => ['required'],
            'category' => ['required'],

        ]);
    }

  

    public function addProduct(Request $request){

       $this->validator($request->all())->validate();

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

    

        

    public function details($product_id){
      
      $product = Products::find($product_id);

      $categories = Categories::all();
 
      $related_products = Products::where('category_id' ,$product->category_id)->paginate(5);     

       return view('details', compact('product' ,'related_products' , 'categories'));
    }


}
