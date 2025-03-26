		<!--Subscribe section-start-->
		<!--===============-->
		<div class="Subscribe-section">
			<div class="container">
				<div class="row align-items-center d-flex">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="subscibe-title">
							<h1>Have Any Help To Software Landing Solution?</h1>
						</div>
						<div class="subscibe-description">
							<p>Conceptualize installed base models before market positioning focused outsourcing.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="zomia-button">
							<div class="subscrib-btn left">
								<a href="#">Get A Started</a>
							</div>
							<div class="subscrib-btn right">
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Subscribe section-end-->
		<!--===============-->

		<!--footer-area-start-->
		<!--===============-->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-widget">
							<div class="widge-content">
								<div class="widge-thumb">
									<img src="{{asset('assets/images/logo1.png')}}" alt="widge img">
								</div>
								<div class="widge-about-text">
									<p>Spiritual Growth With Powerful Prayers In And Out Daily. Wellcome Brethren</p>
								</div>
								<form>
									<div class="form-field">
										<input type="email" name="EMAIL" placeholder="Your Email" required="">
										<button class="submit-button" type="submit">Sing Up<i class="flaticon flaticon-right-arrow"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-widget upper">
							<div class="widge-content">
								<div class="widget-title">
									<h4>Quick Link</h4>
								</div>
								<div class="widge-link">
									<ul>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Home</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>About</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Company History</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>descriptions</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Blogs</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Latest News</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-widget">
							<div class="widge-content">
								<div class="widget-title">
									<h4>Community</h4>
								</div>
								<div class="widge-link">
									<ul>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Prophetic Ministries</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Leadership</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Services</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Good News World</a></li>
										<li><a href="{{ route('login') }}"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Admin Panel</a></li>
										<li><a href="#"><i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>Missions Week</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="single-widget">
							<div class="widge-content">
								<div class="widget-title">
									<h4>Contact Info</h4>
								</div>
								<div class="widget-address">
									<div class="widget-inner d-flex">
										<div class="widget-icon">
											<!-- PLACE A MODAL FOR LOCATION -->
											<a href="#" data-target="" data-dismiss=" " role="dialog" > <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </a>
										</div>
										<div class="widget-social-information">
											<h5>Location</h5>
											<p>Kimara Korogwe , DSM</p>
										</div>
									</div>
									<div class="widget-inner d-flex">
										<div class="widget-icon">
											<i aria-hidden="true" class="far fa-envelope-open"></i>
										</div>
										<div class="widget-social-information">
											<h5>Email Us</h5>
											<p>agm@gmail.com</p>
										</div>
									</div>
									<div class="widget-inner d-flex">
										<div class="widget-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="widget-social-information">
											<h5>Phone Us</h5>
											<p>+123 45678987</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright-area">
					<div class="row">
						<div class="col-lg-12">
							<div class="copyright-text">
								<p>Copyright © zomia all rights reserved.</p>					
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div><!--footer-area-start-->
		<!--===============-->

		<!--==================================================-->
		<!-- Start Search Popup Area -->
		<!--==================================================-->
		<div class="search-popup">
			<button class="close-search style-two"><span class="flaticon-multiply"><i class="fa fa-close t-close"></i></span></button>
			<button class="close-search"><i class="fa fa-arrow-up"></i></button>
			<form method="post" action="{{ route("site.search-home") }}">
			@csrf

				<div class="form-group">
					<input type="search" name="search-field" value="{{ old('search-field') }}" placeholder="Search Here" required="">
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<!--=============================-->
		<!-- Start Search Popup Area -->
		<!--=============================-->

