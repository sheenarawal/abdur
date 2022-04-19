@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">MOTIVATION</h1>
        
            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">What is the primary reason you're interested
                in investing with Fundrise?</h2>
            <form method="post">
                @csrf
             @error('motivation')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="motivation" id="motivation2" value="diversification">
                    <label class="form-check-label" for="motivation2">
                        Diversification
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motivation" id="motivation2" value="income">
                    <label class="form-check-label" for="motivation2">
                        Income
                    </label>
                  </div><br>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motivation" id="motivation2" value="retirement">
                    <label class="form-check-label" for="motivation2">
                        Retirement
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motivation" id="motivation2" value="maior purchase">
                    <label class="form-check-label" for="motivation2">
                        Maior Purchase
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motivation" id="motivation2" value="education">
                    <label class="form-check-label" for="motivation2">
                        Education
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motivation" id="motivation2" value="building wealth">
                    <label class="form-check-label" for="motivation2">
                        Building Wealth
                    </label>
                  </div>
                  <br>
                 
                  <br>
                <button type="submit" class="btn btn-primary">CONTINUE</button><br>

              </form>
    </div>
@stop
@stack('frontend_css')
<link rel="stylesheet" href="{{asset('frontend/css/motivation.css')}}">
  
