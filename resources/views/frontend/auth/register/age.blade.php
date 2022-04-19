@extends('frontend.layouts.app')

@section('frontend_content')
    <div class="row mt-5 mpt-5">
        <div class="col-md-5 mx-auto mt-5 p-5 text-justify bg-light">
            <h1 class="mb-3">AGE</h1>

            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">How old are you?</h2>
            <form method="post" action="{{route('register.age')}}" >
                @csrf
                <div class="form-group">
                    <label for="age">Age</label><br>
                    <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="18">
                    @error('age')
                    <span class="text-danger form-text">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">CONTINUE</button><br>

            </form>
        </div>
    </div>
@stop
@push('frontend_css')
@endpush
@push('frontend_script')
@endpush



