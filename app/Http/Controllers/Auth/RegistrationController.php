<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{


    public function email(Request $request)
    {
        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'email'=>'required|email|unique:users',
            ]);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            Session::put('create_user_email',$request->email);
            return Redirect::route('register.password');
        }
        if (Session::has('create_user_email')){
            Session::forget('create_user_email');
        }
        return  view('frontend.auth.register.email');
    }

    public function password(Request $request)
    {
        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'password'=>'required|min:6',
            ]);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $data = [
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'show_password'=>$request->password
            ];
            $user = User::create($data);
            Auth::loginUsingId($user->id);
            Session::forget('create_user_email');
            return Redirect::route('register.age');
        }
        if (Session::has('create_user_email')){
            $email = Session::get('create_user_email');
            return  view('frontend.auth.register.password',compact('email'));
        }else{
            return Redirect::route('register.email')->withErrors(['email'=>'Email session not found ! Try again']);
        }
    }
    public function age(Request $request)
    {
        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'email'=>'required|email|unique:users',
            ]);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            dd($request->all());
        }
        return  view('frontend.auth.register.age');
    }
}
