@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">DURATION OF INVESTMENT</h1>
        
            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">How long do you plan to hold your Fundrise
                investment?</h2>
            <form method="post">
                @csrf
             @error('duration')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration2" value="less than 3 years">
                    <label class="form-check-label" for="duration2">
                        Less than 3 years
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration2" value="3-5 years">
                    <label class="form-check-label" for="duration2">
                       3-5 years
                    </label>
                  </div><br>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration2" value="6-10 years">
                    <label class="form-check-label" for="duration2">
                        6-10 years
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration2" value="more than 10 years">
                    <label class="form-check-label" for="duration2">
                        More than 10 years
                    </label>
                  </div>
                  <br>
                 
                  <br>
                <button type="submit" class="btn btn-primary">CONTINUE</button><br>

              </form>
    </div>
@stop
@stack('style')
<link rel="stylesheet" href="{{asset('frontend/css/duration.css')}}">
   
