<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        $get = User::where('id',Auth::id())->get();
        return  view('frontend.auth.profile',compact('get'));
    }
    public function edit(Request $request){
        $update = array(
                'name'=>$request['name'],
                'email'=>$request['email'],
                'age'=>$request['age'],
                'investing_level'=>$request['investing_level'],
                'source'=>$request['source'],
                'motivation'=>$request['motivation'],
                'duration'=>$request['duration'],
                'investment'=>$request['investment'],
                'last_name'=>$request['last_name'],
                'country_citizen'=>$request['country_citizen'],
                'country_residence'=>$request['country_residence'],
                'account_type'=>$request['account_type'],
                'address1'=>$request['address1'],
                'address2'=>$request['address2'],
                'state'=>$request['state'],
                'zip_code'=>$request['zip_code'],
                'city'=>$request['city'],
                'mobile'=>$request['mobile'],
                'social_link_no'=>$request['social_link_no'],
                'dob'=>$request['dob'],
//                'profile_photo_path'=>$request['profile_photo_path']
                );
        $update = User::where('id',Auth::id())->update($update);
    }
   
}
