<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;





Route::group(['middleware'=>['guest'],'as'=>'backend.'],function (){
    Route::get('/login',[LoginController::class,'index'])->name('login');
});


Route::group(['middleware'=>['auth'],'as'=>'backend.'],function (){
    Route::get('/',function (){ return Redirect::route('backend.dashboard');});
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/profile',[DashboardController::class,'profile'])->name('profile');

    Route::resource('product',ProductController::class);
    Route::group(['prefix'=>'product','as'=>'product.'],function (){
        Route::get('edit/{product}',[ProductController::class,'edit'])->name('edit');
    });


});


