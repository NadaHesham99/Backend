<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

use App\Models\Products;


use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function catgory(){
       $categories = Categories::all();
       
       return view('adminPages/catgories', compact('categories'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'name_en' => ['required', 'string', 'max:255','regex:/^[a-zA-Z ]+$/u'],
            'Price' => ['required'],
            'nameDiscription' => ['required'],

        ]);
    }

    public function addCatgory(Request $request){

      $this->validator($request->all())->validate();

       $catgory = new Categories();

        $catgory->name = $request->get('name_en');

        $catgory->minPrice = $request->get('Price');

        $catgory->discription = $request->get('nameDiscription');

        $catgory->save();

        return back();

    }

    public function categoriesedit($category_id){

       $categories = Categories::all();

       $category = Categories::find($category_id);

       return view('adminPages/catgories', compact('category','categories'));

    }

    public function update_catgory(Request $request,$category_id)
    {
      $category = Categories::find($category_id);

      $category->name = $request->get('name_en');

      $category->minPrice = $request->get('Price');

      $category->discription = $request->get('nameDiscription');

      $category->save();

      return redirect()->route('catgory');
    }


    public function delete_category($category_id){
      
       $category = Categories::find($category_id);

       $category->delete();

       return back();

    }


       public function product_categories($category_id){
      
       $category = Categories::find($category_id);

       $categories = Categories::all();

       $products = Products::all();
       
       return view('product_categories',compact('category', 'categories','products','category_id'));

    }


}
