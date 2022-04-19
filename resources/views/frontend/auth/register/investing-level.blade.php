@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3">INVESTMENT EXPERIENCE</h1>

        <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">How would you describe your level of
            familiarity with investing?</h2>
        <form method="post">
            @csrf
            @error('investing_level')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investing_level" id="investing_level2"
                       value="novice">
                <label class="form-check-label" for="investing_level2">
                    Novice
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investing_level" id="investing_level2"
                       value="beginner">
                <label class="form-check-label" for="investing_level2">
                    Beginner
                </label>
            </div>
            <br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="investing_level" id="investing_level2"
                       value="competent">
                <label class="form-check-label" for="investing_level2">
                    Competent
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investing_level" id="investing_level2"
                       value="proficient">
                <label class="form-check-label" for="investing_level2">
                    Proficient
                </label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="investing_level" id="investing_level2"
                       value="expert">
                <label class="form-check-label" for="investing_level2">
                    Expert
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-dark">CONTINUE</button>
            <br>

        </form>
    </div>
@stop

@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/investing-level.css')}}">
