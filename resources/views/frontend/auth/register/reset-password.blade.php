@extends('frontend.layouts.app')

@section('frontend_content')

    <section class="vh-100">
        <div class="container padding-bottom-3x mb-2 mt-5">

            <div class="row justify-content-center">
                <div class="col-md-6 mx-auto">
                    <h2 class="text-center fw-bold mx-3 mb-0">Reset Password</h2>

                    <form class="card mt-4">
                        <div class="divider d-flex align-items-center my-4">
                        </div>
                        <div class="card-body">
                            <p>To reset your password online, let's start by entering your email:</p>
                            <div class="form-group"> <label for="email-for-pass">EMAIL ADDRESS</label>
                                <input class="form-control" type="text" id="email-for-pass" required="">
                                <small class="form-text text-muted"></small>
                            </div>

                            <button class="btn btn-primary ml-3" type="submit">CONTINUE</button>
                            <button class="btn btn-secondary" type="submit">GO BACK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@stop
@push('frontend_css')
    <link rel="stylesheet" href="{{asset('frontend/css/password.css')}}">
    <style>
        .is-invalid{
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .text-danger{
            color: #dc3545;
        }
    </style>
@endpush
@push('frontend_script')
@endpush
