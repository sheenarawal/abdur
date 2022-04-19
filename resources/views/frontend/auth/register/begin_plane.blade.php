@extends('frontend.layouts.app')

@section('frontend_content')


     <!-- Jumbotron -->
        <div class="container mt-5">
			<div class="row text-center mt-5">
				<div class="col-md-12 mt-5 pt-3">
				<h2 class="mb-10 line-height-150 mt-50 mb-100-smo mb-200-md">Where would you like to begin?</h2>
				<h4 class="mb-4 text-center c-info">Select your starting account level. You can upgrade anytime by adding funds to your account.</h4>
				</div>
			</div>
         </div> 
                    <!-- Jumbotron -->
   
	
	
	<div class="container mt-5 px-5">
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="container five-col">
			<div class="row text-center">
			<div class="col all-bor py-4"><h3>Starter</h3>
				<p class="cols-p">Start with our simplest experience and lowest minimum.</p>
				<h6 class="i-in">Initial Investment</h5>
				<h2 class="mb-3">$10</h2>
				<a href="#" class="sh-btn mt-5">Start Here</a>
				<hr class="h-line"/ >
				<p class="cols-p">Just getting started? With Starter, With starter you can invest in our diversified flagship fund and enjoy our simplest experience and lowest minimum.</p>
				<a href="#" class="lm">Learn More</a>
			</div>
			<div class="col left-no py-4"><h3>Basic</h3>
			<p class="cols-p">All of the esseantials, including IRA investing and more.</p>
				<h6 class="i-in">Initial Investment</h5>
				<h2 class="mb-3">$10,00+</h2>
				<a href="#" class="sh-btn mt-5">Start Here</a>
				<hr class="h-line"/ >
				<p class="cols-p">Basic unlocks all the esseantials, including investment goals, IRA investing, and the potential of investing in the Fundrise IPO.</p>
				<a href="#" class="lm">Learn More</a>
			</div>
			<div class="col left-no py-4">
			<h3>Core</h3>
			<p class="cols-p">Take control of your portfolio with increased customization.</p>
				<h6 class="i-in">Initial Investment</h5>
				<h2 class="mb-3">$50,00+</h2>
				<a href="#" class="sh-btn mt-5">Start Here</a>
				<hr class="h-line"/ >
				<p class="cols-p">Core allows you to customize your Fundrise portfolio. Here you can choose your preferred return profile and even make direct investments into specific funds.</p>
				<a href="#" class="lm">Learn More</a>
			
			</div>
			<div class="col left-no py-4"><h3>Advanced</h3>
			<p class="cols-p">Access sophisticated strategies with higher return potential.</p>
				<h6 class="i-in">Initial Investment</h5>
				<h2 class="mb-3">$10,000+</h2>
				<a href="#" class="sh-btn mt-5">Start Here</a>
				<hr class="h-line"/ >
				<p class="cols-p">If you're interested in expanding beyond our broadest offerings, Advanced investors have access to our more sophisticated investment products.</p>
				<a href="#" class="lm">Learn More</a></div>
			<div class="col left-no py-4"><h3>Premium</h3>
			<p class="cols-p">One-of-a-kind offerings designed for accredited investors.</p>
				<h6 class="i-in">Initial Investment</h5>
				<h2 class="mb-3">$100,000+</h2>
				<a href="#" class="sh-btn mt-5">Start Here</a>
				<hr class="h-line"/ >
				<p class="cols-p">Premium is our highest tier, designed with accredited investors in mind. Enjoy access to periodic private equity funds and priority access to our investor Relations team.</p>
				<a href="#" class="lm">Learn More</a></div>
		</div>
		</div>
		</div>
		<div class="col-md-1"></div>
		</div>
	</div>
@stop
@stack('styles')
<link rel="stylesheet" href="{{asset('frontend/css/begin-plane.css')}}">
    