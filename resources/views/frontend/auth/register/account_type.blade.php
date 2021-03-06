@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">Let's finish getting your account set up.</h1>

        <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">What type of account would you like to open?</h2>
        <form class="label-mt-0">
            @csrf
            @error('account_type')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <div class="form-check">
                <input class="form-check-input" type="radio" name="account_type" id="individual_account"
                       value="individual_account">
                <label class="form-check-label" for="individual_account">
                    Individual Account
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="account_type" id="other_account" value="other_account">
                <label class="form-check-label" for="other_account">
                    Other Account type
                </label>
            </div>
            <br>


            <br>
            <button type="submit" class="btn btn-dark">CONTINUE</button>
            <br>

        </form>
    </div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/source.css')}}">
