<?php

namespace App\Http\Controllers;

use App\Models\Products;

use App\Models\Categories;



use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function admin(){

    	return view('admin', compact('categories'));

    }

    public function index(){

    	 $categories = Categories::all();

    	 $products = Products::all();

    	 return view('index' , compact('categories','products'));

    }
}
