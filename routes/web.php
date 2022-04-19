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


Route::group(['prefix' => 'register', 'as' => 'register.'], function () {
    Route::get('/', function () {
        return \Illuminate\Support\Facades\Redirect::route('register.email');
    });
    Route::match(['get', 'post',], 'email', [\App\Http\Controllers\Auth\RegistrationController::class, 'email'])->name('email');
    Route::match(['get', 'post',], 'password', [\App\Http\Controllers\Auth\RegistrationController::class, 'password'])->name('password');
    Route::group(['middleware'=>'auth'], function () {
        Route::match(['get', 'post',], 'age', [\App\Http\Controllers\Auth\RegistrationController::class, 'age'])->name('age');
        Route::match(['get', 'post',], 'investing-level', [\App\Http\Controllers\Auth\RegistrationController::class, 'investing_level'])->name('investing-level');
        Route::match(['get', 'post',], 'source', [\App\Http\Controllers\Auth\RegistrationController::class, 'source'])->name('source');
        Route::match(['get', 'post',], 'motivation', [\App\Http\Controllers\Auth\RegistrationController::class, 'motivation'])->name('motivation');
        Route::match(['get', 'post',], 'duration', [\App\Http\Controllers\Auth\RegistrationController::class, 'duration'])->name('duration');
        Route::match(['get', 'post',], 'investment', [\App\Http\Controllers\Auth\RegistrationController::class, 'investment'])->name('investment');
        Route::match(['get', 'post',], 'signup', [\App\Http\Controllers\Auth\RegistrationController::class, 'signup'])->name('signup');
        Route::match(['get', 'post',], 'country', [\App\Http\Controllers\Auth\RegistrationController::class, 'country'])->name('country');
        Route::match(['get', 'post',], 'account-type', [\App\Http\Controllers\Auth\RegistrationController::class, 'account_type'])->name('account-type');
        Route::match(['get', 'post',], 'address', [\App\Http\Controllers\Auth\RegistrationController::class, 'address'])->name('address');
        Route::match(['get', 'post',], 'social', [\App\Http\Controllers\Auth\RegistrationController::class, 'social'])->name('social');
        Route::match(['get', 'post',], 'begin-plane', [\App\Http\Controllers\Auth\RegistrationController::class, 'begin_plane'])->name('begin-plane');
        Route::match(['get', 'post',], 'investment', [\App\Http\Controllers\Auth\RegistrationController::class, 'investment'])->name('investment');
    });
});
Route::get('profile', [\App\Http\Controllers\Auth\ProfileController::class, 'index'])->name('profile');
Route::post('profile-edit', [\App\Http\Controllers\Auth\ProfileController::class, 'edit'])->name('profile-edit');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
