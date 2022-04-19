<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function index(Request $request)
    {
        if ($request->all()){
            //dd($request->all());
            $user = User::firstWhere('email',$request->email);
            if ($user && Hash::check($request->password,$user->password))
            {
                Auth::loginUsingId($user->id);
                return Redirect::route('backend.dashboard')->with('success','Welcome Back '.$user->name);
            }else{
             return Redirect::back()->withErrors(['email'=>'Credentials not match ! Please try again']);
            }
        }
        return view('backend.login');
    }



    public function store(Request $request)
    {
        dd($request->all());
    }


}
