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
                <input class="form-check-input" type="radio" name="motivation" id="diversification" value="diversification">
                <label class="form-check-label" for="diversification">
                    Diversification
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="income" id="motivation2" value="income">
                <label class="form-check-label" for="income">
                    Income
                </label>
            </div>
            <br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="motivation" id="retirement" value="retirement">
                <label class="form-check-label" for="retirement">
                    Retirement
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="motivation" id="maior_purchase" value="maior purchase">
                <label class="form-check-label" for="maior_purchase">
                    Maior Purchase
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="education" id="motivation2" value="education">
                <label class="form-check-label" for="education">
                    Education
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="motivation" id="building_wealth" value="building wealth">
                <label class="form-check-label" for="building_wealth">
                    Building Wealth
                </label>
            </div>
            <br>

            <br>
            <button type="submit" class="btn btn-dark">CONTINUE</button>
            <br>

        </form>
    </div>
@stop
@push('frontend_css')
<link rel="stylesheet" href="{{asset('frontend/css/source.css')}}">
@endpush

