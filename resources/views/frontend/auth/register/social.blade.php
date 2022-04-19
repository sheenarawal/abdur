@extends('frontend.layouts.app')

@section('frontend_content')


    <div class="col-md-8 mx-auto p-5 text-justify bg-light">
        <h1 class="mb-3"><i>Thanks, {{$name}}</i></h1>
          
            <h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">We just need a few more details.</h2>
            <form>
                   @csrf
			<h4 class="mb-4 c-info">Tax Reporting Information</h4>
					<div class="mt-3">
				  <span class="info"> This information is required by the IRS for tax reporting purposes.</span></div>
                <div class="mt-3"><span class="info">Fundrise uses bank-level security for your protection. Your information is encrypted with an AES bit symmetric key, the same standard used by the largest commercial banks.
</span></div>
				<div class="form-group">
                  <label for="exampleInputEmail1">SOCIAL SECURITY NUMBER</label><br>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="social_link_no">
				  <span class="info">We use SSL and 64-bit encryption to keep your data secure</span>
                </div>
                        @error('social_link_no')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
				<div class="form-group">
                  <label for="exampleInputEmail1">DATE OF BIRTH</label><br>
                  <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date_of_brith">				  
                </div>
            @error('date_of_brith')
            <span class="text-danger form-text">{{$message}}</span>
            @enderror
			
                <button type="submit" class="btn btn-primary">CONTINUE</button><br>

              </form>
    </div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/investing-level.css')}}">
 