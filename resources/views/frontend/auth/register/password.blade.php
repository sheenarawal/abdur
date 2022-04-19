@extends('frontend.layouts.app')

@section('frontend_content')
    <div class="p-5 text-justify bg-light"
         style="margin-top: 10%; margin-left: 30%; margin-right: 30%; margin-bottom: 35px; padding-bottom: 30px;">
    <form action="{{route('register.password')}}" method="post">
        @csrf
        <p class="overline delta">Password</p>
        <p class="font-style-italic mt-0 mb-150"> Set a secure password to create your account and save your responses. </p>
        <h1 class="heading-2 line-height-150 mt-50 mb-100-smo mb-200-md">Choose a Password</h1>
        <div data-v-70e4fdaa="" class="user-creation-form">
            <form data-v-70e4fdaa="">
                <!---->
                <!---->
                <div data-v-70e4fdaa="">
                    <div data-v-70e4fdaa="" class="field__inner mb-100">
                        <div>
                            <label class="field__label"> create password </label>
                            <div class="field__input">
                                <input type="hidden" name="email" value="{{isset($email)?$email:''}}">
                                <div data-v-70e4fdaa="" class="display-flex align-items-center position-relative">
                                    <input data-v-70e4fdaa="" data-test="password" placeholder="" name="password" type="password" class="form-control input @error('password') is-invalid @enderror">
                                    <svg data-v-70e4fdaa="" version="1.1" viewBox="0 0 24 24" class="user-creation-form__password-icon position-absolute svg-icon svg-fill" style="width: 23px; height: 23px;">
                                        <defs>
                                            <path pid="0" d="M11 .5C6 .5 1.73 3.61 0 8c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5C20.27 3.61 16 .5 11 .5zM11 13c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8C9.34 5 8 6.34 8 8s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" id="svgicon_view_a">

                                            </path>
                                        </defs>
                                        <g transform="translate(1 4)" fill="none" fill-rule="evenodd">
                                            <mask id="svgicon_view_b" fill="#fff">
                                                <use xlink:href="#svgicon_view_a">

                                                </use>
                                            </mask>
                                            <use fill="#000" fill-rule="nonzero" xlink:href="#svgicon_view_a">

                                            </use>
                                            <path pid="1" fill="#242628" mask="url(#svgicon_view_b)" d="M-1-4h24v24H-1z">

                                            </path>
                                        </g>
                                    </svg>
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!---->
                    </div>
                </div>
                <!---->
                <span data-v-70e4fdaa="" class="muted zeta display-block">
                    <span data-v-70e4fdaa=""> By continuing you indicate you have reviewed and agree to the  <a data-v-70e4fdaa="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/1fcd9282-5163-4d33-a812-d6edd2b04186/Fundrise - Terms of Service.pdf" target="_blank" class="text-color-current-color text-decoration-underline">Terms of Service</a>
                    </span><span data-v-70e4fdaa="">  and  <a data-v-70e4fdaa="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/f6c4ccf1-beee-43f1-bd8e-84c0cfa300d2/Fundrise Privacy Policy.pdf" target="_blank" class="text-color-current-color text-decoration-underline">Privacy Policy</a></span><span data-v-70e4fdaa=""> , and have received a copy of Fundrise Advisors
                        <a data-v-70e4fdaa="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/df86ceff-e77c-40f3-b7f2-bc92307dbcff/Exhibit B - Form ADV Part 2 - Fundrise Advisors March 2022 - Final.pdf" target="_blank" class="text-color-current-color text-decoration-underline">Form ADV Part II</a></span><span data-v-70e4fdaa=""> , Fundrise Advisors  <a data-v-70e4fdaa="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/4068463a-e3b2-429d-a4a2-c4818cc73175/Fundrise Advisors - Form CRS - Client Relationship Summary 2022 - Final.pdf" target="_blank" class="text-color-current-color text-decoration-underline">Form CRS</a></span><span data-v-70e4fdaa=""> , and Fundrise Advisors  <a data-v-70e4fdaa="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/01e3699e-2497-48d8-8d6a-7db74afc8512/Fundrise Advisors - Client Agreement 2022 - Final.pdf" target="_blank" class="text-color-current-color text-decoration-underline">Client Agreement</a></span>.
                    </span><div data-v-70e4fdaa="" id="signup-recaptcha-element" data-size="invisible" class="g-recaptcha"></div><div data-v-70e4fdaa="" class="button-group-dual"><!----><button data-v-70e4fdaa="" type="submit" class="button button-fundrise-orange" data-test="account-creation-submit"> Continue </button>
                </div>
            </form>
        </div>
    </form>
    </div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/password.css')}}">
@push('frontend_css')
    
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
