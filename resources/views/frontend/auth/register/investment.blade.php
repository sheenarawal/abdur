@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">INVESTMENT PLANNING</h1>
        
            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">Across all of your investments, how much do you hope to invest on a yearly basis?</h2>
            <form method="post">
                @csrf
             @error('investment')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror

                <div class="form-check">
				
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="Less than $5,000" >
                    <label class="form-check-label" for="investment2">
                        Less than $5,000
                    </label>
                  </div>
               <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="$11,000 - $20,000">
                    <label class="form-check-label" for="investment2">
                       $5,000 - $10,000
                    </label>
                  </div><br>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="less than $5,000">
                    <label class="form-check-label" for="investment2">
                        $11,000 - $20,000
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="$21,000 - $30,000">
                    <label class="form-check-label" for="investment2">
                        $21,000 - $30,000
                    </label>
                  </div><br>
				  <div class="form-check">
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="$31,000 - $50,000">
                    <label class="form-check-label" for="investment2">
                        $31,000 - $50,000
                    </label>
                  </div><br>
				  <div class="form-check">
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="$51,000 - $100,000">
                    <label class="form-check-label" for="investment2">
                        $51,000 - $100,000
                    </label>
                  </div><br>
				  <div class="form-check">
                    <input class="form-check-input" type="radio" name="investment" id="investment2" value="more than $100,000">
                    <label class="form-check-label" for="investment2">
                        More than $100,000
                    </label>
                  </div><br>
				
				  <br>
                  
                  
                 
                  <br>
                <button type="submit" class="btn btn-primary">CONTINUE</button><br>

              </form>
    </div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/investing-level.css')}}">
 
