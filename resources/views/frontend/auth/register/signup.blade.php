@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
       <h1 class="mb-3">Let's finish getting your account set up.</h1>
          
            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">What is your legal name?</h2>
            <form method="post">
                @csrf
                <div class="form-group col-md-6 float">
                  <label for="exampleInputEmail1">FIRST NAME</label><br>
                  <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="first_name">
                  @error('first_name')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                </div>
				<div class="form-group col-md-6">
                  <label for="exampleInputEmail1">LAST NAME</label><br>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="last_name">
                  @error('last_name')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                </div>
				<div class="form-group">
				<input type="checkbox" class="" aria-describedby="emailHelp" name="agree">  
                                @error('agree')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                  I have reviewed and agree to the Terms of Service , Privacy Policy , Fundrise Advisors Form ADV Part II, Fundrise Advisors
Form CRS , and Fundrise Advisors Client Agreement.</div><br>
                  
                <button type="submit" class="btn btn-primary">CONTINUE</button><br>

              </form>
    </div>
@stop
@push('frontend_css')
<link rel="stylesheet" href="{{asset('frontend/css/signup.css')}}">
    <style>
        .is-invalid{
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .text-danger{
            color: #dc3545;
        }
    </style>
@endpush
@push('frontend_script')
@endpush
