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
                'age'=>'required|numeric|min:18',
                
            ]);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['age'=>$request->age]
            );
            return Redirect::route('register.investing-level');
        }
        return  view('frontend.auth.register.age');
    }
    public function investing_level(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'investing_level'=>'required',
                
            ],
                    [ 'investing_level.required' => 'Please select atleast one level']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['investing_level'=>$request->investing_level]
            );
            return Redirect::route('register.source');
        }
        return  view('frontend.auth.register.investing-level');
    }
    
    public function source(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'source'=>'required',
                
            ],
                    [ 'source.required' => 'Please select atleast one investing advice source']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['source'=>$request->source]
            );
            return Redirect::route('register.motivation');
        }
        return  view('frontend.auth.register.source');
    }
    public function motivation(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'motivation'=>'required',
                
            ],
                    [ 'motivation.required' => 'Please select atleast one reason']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['motivation'=>$request->motivation]
            );
            return Redirect::route('register.duration');
        }
        return  view('frontend.auth.register.motivation');
    }
     public function duration(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'duration'=>'required',
                
            ],
                    [ 'duration.required' => 'Please select atleast one invesment year']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['duration'=>$request->duration]
            );
            return Redirect::route('register.investment');
        }
        return  view('frontend.auth.register.duration');
    }
    public function investment(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'investment'=>'required',
                
            ],
                    [ 'investment.required' => 'Please select atleast one invesment']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['investment'=>$request->investment]
            );
            return Redirect::route('register.signup');
        }
        return  view('frontend.auth.register.investment');
    }
    public function signup(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'first_name'=>'required',
                'last_name'=>'required',
                'agree'=>'required',
                
            ],['agree.required' => 'Please check the policy']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['name'=>$request->first_name,'last_name'=>$request->last_name]
            );
            return Redirect::route('register.country');
        }
        return  view('frontend.auth.register.signup');
    }
     public function country(Request $request)
    {
         
        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'country_citizen'=>'required',
                'country_residence'=>'required',
                
            ],[
                'country_citizen.required' => 'Please select your country citizenship',
                'country_residence.required' => 'Please select your country residence'
            ]);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['country_citizen'=>$request->country_citizen,'country_residence'=>$request->country_residence]
            );
            return Redirect::route('register.account-type');
        }
        return  view('frontend.auth.register.country');
    }
    public function account_type(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'account_type'=>'required',
                
            ],
                    [ 'account_type.required' => 'Please select account type']);
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['account_type'=>$request->account_type]
            );
            return Redirect::route('register.address');
        }
        return  view('frontend.auth.register.account_type');
    }
    
     public function address(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'address1'=>'required',
                'address2'=>'required',
                'state'=>'required',
                'city'=>'required',
                'zip_code'=>'required|numeric',
                'mobile'=>'required|numeric',
                
            ],
             );
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['address1'=>$request->address1,'address2'=>$request->address2,'state'=>$request->state,'city'=>$request->city,'zip_code'=>$request->zip_code,'mobile'=>$request->mobile]
            );
            return Redirect::route('register.social');
        }
        $name = auth()->user()->name;
        return  view('frontend.auth.register.address',compact('name'));
    }
    public function social(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
                'social_link_no'=>'required',
                'date_of_brith'=>'required',
                
            ],
             );
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user = User::where('id',Auth::id())->update(
                ['social_link_no'=>$request->social_link_no,'dob'=>$request->date_of_brith]
            );
            return Redirect::route('register.begin-plane');
        }
        $name = auth()->user()->name;
        return  view('frontend.auth.register.social',compact('name'));
    }
    public function begin_plane(Request $request)
    {

        if ($request->all()){

            $valid = Validator::make($request->all(),[
               
                
            ],
             );
            if ($valid->fails())
            {
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
           
            return Redirect::route('register.account-type');
        }
        return  view('frontend.auth.register.begin_plane');
    }
    
}
