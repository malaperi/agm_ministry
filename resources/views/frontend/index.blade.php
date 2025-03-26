@extends('frontend.layouts.app')
@section('content')
		<!--hero section Start-->
		<!--services-area start-->
		<!--about-us-area start-->
		<!--description-area start-->
		<!--why-choose-area start-->
		<!--team-area-start-->
		<!--portfolio-section start-->
		<!--testimonial-area-start-->

@include('frontend.home.components.hero')
@include('frontend.home.components.services')
@include('frontend.home.components.about')
@include('frontend.home.components.description')
@include('frontend.home.components.why-us')
@include('frontend.home.components.team')
@include('frontend.home.components.portfolio')
@include('frontend.home.components.testimonial')
@include('frontend.home.components.blog')
@endsection
	