@extends('frontend.layouts.app')

@section('frontend_content')
    <form action="{{route('register.email')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"  aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
@push('frontend_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/password.css')}}">
@endpush
@push('frontend_script')
@endpush
