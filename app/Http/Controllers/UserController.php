<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Categories;

use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
     public function user(){

       $categories = Categories::all();

       $users = User::where('role',0)->get();

       return view('adminPages/user', compact('users','categories'));
    }

    public function admins(){

      $categories = Categories::all();

       $users = User::where('role',1)->get();

       return view('adminPages/user', compact('users','categories'));
    }

     protected function validator(array $data)
    {
        return Validator::make($data, [
          
            'name_ar' => ['required', 'string', 'max:255','regex:/^[\p{Arabic} ]+$/u'],

            'name_en' => ['required', 'string', 'max:255','regex:/^[a-zA-Z ]+$/u'],
            
            'address' => ['required','min:3','regex:/^[\p{Arabic}0-9\-\, ]|[a-zA-Z0-9\-\, ]+$/u'],

            'phone' => ['required', 'min:10','regex:/^\+?\d{10,}$/'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],

            'password' => ['required', 'string', 'min:8'],

            'role' =>['required']

        ]);
    }



    public function addUser(Request $request){

     $this->validator($request->all())->validate();

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
