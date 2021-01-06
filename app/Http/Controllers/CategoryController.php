<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

class CategoryController extends Controller
{
    public function catgory(){
       $categories = Categories::all();
       
       return view('adminPages/catgories', compact('categories'));
    }

    public function addCatgory(Request $request){
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
}
