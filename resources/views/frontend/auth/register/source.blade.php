@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">SOURCE OF WISDOM</h1>
        
            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">Where do you go for investing advice?</h2>
            <form method="post">
                @csrf
             @error('source')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="source" id="source2" value="investment advisor">
                    <label class="form-check-label" for="source2">
                        Investment advisor
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="source" id="source2" value="self-educate">
                    <label class="form-check-label" for="source2">
                        Self-educate
                    </label>
                  </div><br>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="source" id="source2" value="friends and family">
                    <label class="form-check-label" for="source2">
                        Friends and family
                    </label>
                  </div>
                  <br>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="source" id="source2" value="i don't seek advice">
                    <label class="form-check-label" for="source2">
                        I don't seek advice
                    </label>
                  </div>
                  <br>
                  <br>
                <button type="submit" class="btn btn-primary">CONTINUE</button><br>

              </form>
    </div>
@stop
@stack('frontend_css')
<link rel="stylesheet" href="{{asset('frontend/css/source.css')}}">
   