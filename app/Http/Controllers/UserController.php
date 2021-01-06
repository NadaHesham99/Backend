<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
     public function user(){
       $users = User::where('role',0)->get();
       //dd($product);
       return view('adminPages/user', compact('users'));
    }

    public function admins(){
       $users = User::where('role',1)->get();
       //dd($product);
       return view('adminPages/user', compact('users'));
    }


    public function addUser(Request $request){
       $user = new User();

        $user->name_ar = $request->get('name_ar');

        $user->name_en = $request->get('name_en');

        $user->adress = $request->get('address');

        $user->phone = $request->get('phone');

        $user->email = $request->get('email');

        $user->password = $request->get('password');

        $user->role = $request->get('role');

        $user->save();

        return back();

    }

     public function edit_user($user_id){

       $users = User::all();

       $user = User::find($user_id);

       return view('adminPages/user', compact('user','users'));

    }

    public function update_user(Request $request,$user_id)
    {
      $user = User::find($user_id);

        $user->name_ar = $request->get('name_ar');

        $user->name_en = $request->get('name_en');

        $user->adress = $request->get('address');

        $user->phone = $request->get('phone');

        $user->email = $request->get('email');

        $user->password = $request->get('password');

        $user->role = $request->get('role');

        $user->save();

      return redirect()->route('user');
    }


    public function delete_user($user_id){
      
       $user = User::find($user_id);

       $user->delete();

       return back();

    }
}
