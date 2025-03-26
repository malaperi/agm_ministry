<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <html lang="en-US"> -->
	
<!-- Mirrored from malaperiindex MALAPERI [XR&CO'2014], Wed, 29 Jan 2025 05:22:39 GMT -->
<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>{{_('AGM') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="AGM Ministry">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="66x66" href="{{asset('assets/images/fav-icon/icon.png')}}">
		<!-- bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css" media="all" />
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/ajax/libs/font-awesome/6.1.0/css/all.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css')}}">
		<!-- carousel CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css" media="all"/>
		<!-- nivo-slider CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/nivo-slider.css')}}" type="text/css" media="all"/>
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" media="all"/>
		<!-- animated-text CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/animated-text.css')}}" type="text/css" media="all"/>
		<!-- font-awesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" type="text/css" media="all"/>
		<!-- font-flaticon CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" type="text/css" media="all"/>
		<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" type="text/css" media="all"/>
		<!-- meanmenu CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}" type="text/css" media="all"/>	
		<!-- transitions CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css" media="all"/>
		<!-- venobox CSS -->
		<link rel="stylesheet" href="{{asset('venobox/venobox.css')}}" type="text/css" media="all"/>
		<!-- widget CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/widget.css')}}" type="text/css" media="all"/>
		<!-- modernizr js -->	
		<script type="text/javascript" src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- theme-default CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme-default.css')}}" type="text/css" media="all"/>
		<!-- Main Style CSS -->
		<link rel="stylesheet"  href="{{ asset('style.css')}}" type="text/css" media="all" />
		<!-- responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" media="all"/>
	</head>
	<body>
		<!-- loder start-->
		<div class="loader-wrapper">
		    <div class="loader"></div>
		    <div class="loder-section left-section"></div>
		    <div class="loder-section right-section"></div>
		</div><!-- loder end-->

		<!--Zomia mobile-menu-top-logo-Start-->
		<!--=============================-->
		<div class="mobile-logo-area d-sm-block d-md-block d-lg-none">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="mobile-menu-logo text-center">
							<a href="index.html">
								<img src="{{asset('assets/images/logo-2.png')}}" alt="Agm">
							</a>		
						</div>
					</div>
				</div>
			</div>
		</div><!--Zomia mobile-menu-top-logo-end-->
		<!--============================-->

		<!--Zomia Header Menu Area Start-->
		<div id="sticky-header" class="zomia_nav_manu d-md-none bg_color2 white d-lg-block d-sm-none d-none">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2">
						<div class="logo">
							<a class="main_sticky" href="index.html" title="petech">
								<img src="{{asset('assets/images/logo.png')}}" alt="astute"/>
							</a>
						</div>
					</div>
					<div class="col-lg-7">
						<nav class="zomia_menu">
							<ul class="nav_scroll">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a class="added-new-demo" href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="about.html">ABOUT</a></li>
										<li><a href="service.html">SERVICE</a></li>
										<li><a href="portfolio.html">PORTFOLIO</a></li>
										<li><a href="team.html">TEAM MEMBER</a></li>
										<li><a href="contact.html">CONTACT</a></li>
										<li><a href="faq.html">FAQ</a></li>
									</ul>
								</li>
								<li><a class="added-new-demo" href="#">Blog</a>
									<ul class="sub-menu">
										<li><a href="blog-list.html">BLOG LIST</a></li>
										<li><a href="blog-grid.html">BLOG GRID</a></li>
										<li><a href="blog-details.html">Blog details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>			
						</nav>
					</div>
					<div class="col-lg-3">
						<div class="header-search-button">
							<div class="search-box-btn search-box-outer">
								<i class="fa fa-search"></i>
							</div>
							<div class="header-donate-btn">
								<a class="header-btn" href="#">Get A Quote</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--Zomia Header Menu Area end-->
		
		<!-- Zomia Mobile Menu Area start -->
		<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
			<div class="mobile-menu">
				<nav class="petech_menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="service.html">Service</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a class="added-new-demo" href="#">Pages</a>
							<ul class="sub-menu">
								<li><a href="about.html">ABOUT</a></li>
								<li><a href="service.html">SERVICE</a></li>
								<li><a href="portfolio.html">PORTFOLIO</a></li>
								<li><a href="team.html">TEAM MEMBER</a></li>
								<li><a href="contact.html">CONTACT</a></li>
								<li><a href="faq.html">FAQ</a></li>
							</ul>
						</li>
						<li><a class="added-new-demo" href="#">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog-list.html">BLOG LIST</a></li>
								<li><a href="blog-grid.html">BLOG GRID</a></li>
								<li><a href="blog-details.html">Blog details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div><!-- Zomia Mobile Menu Area end-->

		@yield('content')
		<!--===============-->

		@include('frontend.layouts.partials.footer')

		<!-- jquery js -->	
		<script type="text/javascript" src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
		<!-- jquery meanmenu js -->	
		<script type="text/javascript" src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
		<!-- carousel js -->
		<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<!-- counterup js -->
		<script type="text/javascript" src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
		<!-- waypoints js -->
		<script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
		<!-- wow js -->
		<script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>
		<!-- imagesloaded js -->
		<script type="text/javascript" src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
		<!-- venobox js -->
		<script type="text/javascript" src="{{asset('venobox/venobox.js')}}"></script>
		<!-- ajax mail js -->
		<script type="text/javascript" src="{{asset('assets/js/ajax-mail.js')}}"></script>
		<!--  animated-text js -->	
		<script type="text/javascript" src="{{asset('assets/js/animated-text.js')}}"></script>
		<!-- venobox min js -->
		<script type="text/javascript" src="{{asset('venobox/venobox.min.js')}}"></script>
		<!-- isotope js -->
		<script type="text/javascript" src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
		<!-- jquery nivo slider pack js -->
		<script type="text/javascript" src="{{asset('assets/js/jquery.nivo.slider.pack.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
		<!-- jquery scrollup js -->	
		<script type="text/javascript" src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
		<!-- bootstrap js -->	
		<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<!-- theme js -->	
		<script type="text/javascript" src="{{asset('assets/js/theme.js')}}"></script>
		<!-- jquery js -->
	</body>

<!-- Mirrored from malaperiindex MALAPERI [XR&CO'2014], Wed, 29 Jan 2025 05:22:47 GMT -->
</html>