@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">INVESTMENT PLANNING</h1>

        <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">
            Across all of your investments, how much do you hope to invest on a yearly basis?
        </h2>
        <form method="post">
            @csrf
            @error('investment')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror

            <div class="form-check">

                <input class="form-check-input" type="radio" name="investment" id="less_5" value="Less than $5,000">
                <label class="form-check-label" for="less_5">Less than $5,000</label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="5_to_10" value="$11,000 - $20,000">
                <label class="form-check-label" for="5_to_10">$5,000 - $10,000</label>
            </div>
            <br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="11_to_20" value="$11,000 - $20,000">
                <label class="form-check-label" for="11_to_20">$11,000 - $20,000</label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="21_to_30"
                       value="$21,000 - $30,000">
                <label class="form-check-label" for="21_to_30">
                    $21,000 - $30,000
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="31_to_50"
                       value="$31,000 - $50,000">
                <label class="form-check-label" for="31_to_50">
                    $31,000 - $50,000
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="51_to_10"
                       value="$51,000 - $100,000">
                <label class="form-check-label" for="51_to_10">
                    $51,000 - $100,000
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="to_10"
                       value="more than $100,000">
                <label class="form-check-label" for="to_10">
                    More than $100,000
                </label>
            </div>
            <br>

            <br>


            <br>
            <button type="submit" class="btn btn-dark">CONTINUE</button>
            <br>

        </form>
    </div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/source.css')}}">

