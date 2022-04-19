@extends('frontend.layouts.app')

@section('frontend_content')
    <!-- Jumbotron -->
    <div class="p-5 text-justify bg-light"
         style="margin-top: 10%; margin-left: 30%; margin-right: 30%; margin-bottom: 35px; padding-bottom: 30px;">
        <h1 class="mb-3">GETTING STARTED</h1>
        <h4 class="mb-4">Tell us a bit about yourself -- we'll
            create your account and suggest
            the strategy that best fits your goals.</h4>
        <h2 class="mb-10">What is your email address?</h2>
        <form action="{{route('register.email')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">EMAIL ADDRESS</label><br>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>
            @error('email')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
            <button type="submit" class="btn btn-dark">CONTINUE</button>
            <br>

        </form>
    </div>
    <!-- Jumbotron -->
@stop
@push('frontend_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush
@push('frontend_script')

@endpush
