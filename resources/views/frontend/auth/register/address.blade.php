@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3"><i>Thanks, {{$name}}</i></h1>

        <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">We just need a few more details.</h2>
        <form>
            @csrf
            <h4 class="mb-4 c-info">Contact Information</h4>
            <div class="form-group">
                <label for="exampleInputEmail1">ADDRESS LINE 1</label><br>
                <input type="text" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="address1">
                <span class="text-secondary h6 pt-2"> This should be the address used for tax purposes.</span>
            </div>
            @error('address1')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">ADDRESS LINE 2</label><br>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="address2">

            </div>
            @error('address2')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <div class="row">

                <div class="form-group col-md-6 float">
                    <label for="exampleInputEmail1">STATE</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="state">
                    @error('state')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">CITY</label><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="city">
                    @error('city')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                </div>

            </div>
            <div class="form-group col-md-5 pl-0">
                <label for="exampleInputEmail1">ZIP CODE</label><br>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="zip_code">
            </div>
            @error('zip_code')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">PHONE NUMBER (MOBILE PREFERRED)</label><br>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       name="mobile">

            </div>
            @error('mobile')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <button type="submit" class="btn btn-dark">CONTINUE</button>
            <br>

        </form>
    </div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/source.css')}}">
