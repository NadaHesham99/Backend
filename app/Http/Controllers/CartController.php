<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

use App\Models\Bill;

use App\Models\Order;

use App\Models\Cart;



use Auth;

class CartController extends Controller
{
    public function add_cart(Request $request,$product_id){
        
        $cartExist = Cart::where('user_id',Auth::id())->where('product_id',$product_id)->first();

        if(!empty($cartExist))
        {
        	$cartExist->quantity += 1;
        	$cartExist->save();
        }
    	else
    	{
            $cart = new Cart();

	        $cart->quantity = 1;

	        $cart->product_id = $product_id; 

	    	$cart->user_id = Auth::id();

	    	$cart->save();
    	}
    	

    	return back();

    }

     public function cart(){

        $categories = Categories::all();
        
        $carts = Cart::where('user_id',Auth::id())->get();

        $total_price=0;

    	foreach ($carts as $cart) 
    	{
    		$total_price += $cart->product->price * $cart->quantity;
    	}

    	return view('cart',compact('carts','total_price' , 'categories'));

    }

    public function delete_cart($cart_id){
      
       $cart = Cart::find($cart_id);

       $cart->delete();

       return back();

    }



    public function checkout()

    {
        $categories = Categories::all();

        return view('checkout',compact('categories'));
    }




    public function add_bill(Request $request)
    {
        $categories = Categories::all();
        $carts = Cart::where('user_id',Auth::id())->get();
        $total_price=0;
        foreach ($carts as $cart) 
        {
            $total_price += $cart->product->price * $cart->quantity;
        }

        $bill = new Bill();
        $bill->user_id = Auth::id();
        $bill->address = $request->get('address');
        $bill->payment_details = $request->get('Payment_Details');
        $bill->total_price = $total_price;
        $bill->save();
        foreach ($carts as $cart) 
        {
            $order = new Order();
            $order->bill_id = $bill->id;
            $order->product_id = $cart->product_id;
            $order->quantity = $cart->quantity;
            $order->save();
            $cart->delete();
        }

        return view('thankyou' , compact('categories'));
    }

}
