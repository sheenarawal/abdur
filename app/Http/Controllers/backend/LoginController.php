<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('backend.login');
    }



    public function store(Request $request)
    {
        //
    }


}
