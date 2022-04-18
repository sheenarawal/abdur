<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix'=>'register','as'=>'register.'],function (){
    Route::match(['get','post',],'email',[\App\Http\Controllers\Auth\RegistrationController::class,'email'])->name('email');
    Route::match(['get','post',],'password',[\App\Http\Controllers\Auth\RegistrationController::class,'password'])->name('password');
    Route::match(['get','post',],'age',[\App\Http\Controllers\Auth\RegistrationController::class,'age'])->name('age');
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
