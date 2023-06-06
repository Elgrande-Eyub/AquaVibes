<html class="no-js">
<head>
	<title>Wavex - Bootstrap 4 premium SinglePage and MultePage HTML template</title>
	<meta charset="utf-8">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animations.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" class="color-switcher-link">
<link rel="stylesheet" href="{{ asset('css/shop.css') }}" class="color-switcher-link">
<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>




</head>

<body>


	<div class="preloader">
		<div class="preloader_image pulse"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">


		</div>
	</div>

	<div class="modal fade popupLogin" id="popupLogin" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ds ms overflow-visible s-overlay s-mobile-overlay">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 class="color-main mb-3">Log in</h4>
								<form class="form-registration c-mb-20 c-gutter-20" action="https://html.modernwebtemplates.com/">
									<div class="row mb-4">
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
											</div>
										</div>
									</div>
									<a class="registerRedirect " data-dismiss="modal" data-target="#popupRegistr" data-toggle="modal" href="#">Not a member? Register!</a>
									<button type="submit" class="btn btn-maincolor mt-30 d-block">Sign In</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade popupRegistr" id="popupRegistr" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content ds ms overflow-visible s-overlay s-mobile-overlay">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 class="color-main mb-4">Registration</h4>
								<form class="form-registration c-mb-20 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="login" aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="password" aria-required="true" required>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="email" required aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="password" name="confirmPassword" class="form-control" placeholder="password" required aria-required="true">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="checkbox" id="agreed" name="agreed" value="agreed" required aria-required="true"><label for="agreed">I agree to the rules</label>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-maincolor mt-30 d-block">Registration</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute ds cover-background ">
				<header class="page_header ds ms s-overlay">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="index.html" class="logo">
									<img src="images/logo.png" alt="img">
								</a>
							</div>
							<div class="col-xl-8 col-lg-5 col-1">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">
										<li class="active">
											<a href="/index">Home</a>

										</li>




                                        <li>
											<a href="index-2.html">Prices</a>

										</li>



										<!-- gallery -->
										<li>
											<a href="gallery-image.html">Gallery</a>

										</li>
										<!-- eof Gallery -->

										<!-- contacts -->
										<li>
											<a href="contact.html">Contact</a>

										</li>
										<!-- eof contacts -->
									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							<div class="col-xl-2 col-lg-3 text-right d-none d-lg-block">
								<a class="fs-20 links-maincolor-hover" href="tel:+88003532455"><mark>8 800</mark> 353-24-55</a>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

			</div>

			<section class="page_slider slider-1">
				<div class="flexslider">
					<ul class="slides">
						<li class="ds cover-image text-center text-lg-left">
							<img src="images/slide01.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word">
															Wind, Water, Lifestyle.
														</h3>
														<h2 class="intro_featured_word">
															aquavibes
														</h2>
														<h6 class="intro_after_featured_word">
															Agadir
														</h6>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<a href="pricing.html" class="btn btn-maincolor btn-slider btn-medium">Book a Lesson</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ls cover-image text-center text-lg-left">
							<img src="images/slide02.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word">
															Wind, Water, Lifestyle.
														</h3>
														<h2 class="intro_featured_word">
															aquavibes
														</h2>
														<h6 class="intro_after_featured_word">
															Agadir
														</h6>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<a href="pricing.html" class="btn btn-maincolor btn-slider btn-medium">Book a Lesson</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ls cover-image text-center text-lg-left">
							<img src="images/slide03.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<div class="divider-90"></div>
													<div class="d-inline-block">
														<h3 class="intro_before_featured_word">
															Wind, Water, Lifestyle.
														</h3>
														<h2 class="intro_featured_word">
															aquavibes
														</h2>
														<h6 class="intro_after_featured_word">
															Agadir
														</h6>
													</div>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<a href="pricing.html" class="btn btn-maincolor btn-slider btn-medium">Book a Lesson</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
					</ul>
				</div> <!-- eof flexslider -->
			</section>


			<!-- Section About -->
			<section id="about" class="ls ms section-about s-py-90 s-py-xl-160 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left">About Us</span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span>Feel Our Vibe</span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome <br>and unique. </span>
							</p>
							<div class="divider-40 divider-xl-50"></div>
							<div class="border-left-custom">
								<p>
                                    At AquaVibes, we are passionate about bringing the exhilarating experience of surfing right to your doorstep.</p>
								<p>
                                    Our mission is to provide top-quality surf lessons and unforgettable adventures to surf enthusiasts of all levels. Whether you're a beginner or an experienced surfer, we have something for everyone.</p>
							</div>
							<div class="divider-40 divider-xl-50"></div>
							<div class="several-buttons">
								<a href="pricing.html" class="btn btn-maincolor btn-medium">Book a Lesson</a>
								<a href="about.html" class="btn btn-outline-maincolor btn-medium">Learn More</a>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>
						<div class="col-lg-6 mr--100-xl-with-scale">
							<div class="post_format-post-format-video">
								<div class="embed-responsive embed-responsive-3by2">
									<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
										<img src="images/bg-video.jpg" alt="img">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Counter -->
			<section id="features" class="ls section-counter s-overlay mobile-overlay s-py-90 s-py-xl-160 c-gutter-40">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<p class="text-center text-md-left color-darkgrey mb-1">
								<span class="line-left">Advantages </span>
							</p>
							<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
								<span>Why Learn How To <br>Surfing With Us?</span>
							</h3>
							<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome<br> and unique. </span>
							</p>
							<div class="divider-60 divider-xl-90"></div>
							<div class="row">
								<div class="col-md-4">
									<div class="icon-box text-center text-md-left">
										<div class="icon-styled color-darkgrey fs-50">
											<i class="ico ico-wave"></i>
										</div>
										<h3 class="special-heading text-uppercase counter-wrap color-main mt-2 mb-3">
											<span class="counter" data-from="0" data-to="251" data-speed="1500">0</span>
										</h3>
										<p>Safest spot home to flat and shallow</p>
									</div>
									<div class="divider-30 divider-lg-0"></div>
								</div>
								<div class="col-md-4">
									<div class="icon-box text-center text-md-left">
										<div class="icon-styled color-darkgrey fs-50">
											<i class="ico ico-surf"></i>
										</div>
										<h3 class="special-heading text-uppercase counter-wrap color-main mt-2 mb-3">
											<span class="counter" data-from="0" data-to="72" data-speed="1500">0</span>
										</h3>
										<p>Passionate and very experienced team</p>
									</div>
									<div class="divider-30 divider-lg-0"></div>
								</div>
								<div class="col-md-4">
									<div class="icon-box text-center text-md-left">
										<div class="icon-styled color-darkgrey fs-50">
											<i class="ico ico-calm"></i>
										</div>
										<h3 class="special-heading text-uppercase counter-wrap color-main mt-2 mb-3">
											<span class="counter" data-from="0" data-to="193" data-speed="1500">0</span>
										</h3>
										<p>Newest and safest ozone kitesurf gear</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Services -->
			<section id="services" class="ls ms s-py-90 s-py-xl-160">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-xl-3 section-special small-section">
							<div>
								<div class="content-center">
									<p class="text-center text-lg-left color-darkgrey mb-1">
										<span class="line-left">Services</span>
									</p>
									<h3 class="text-center text-lg-left mt-0 mb-2 special-heading color-darkgrey">
										<span>Let’s Start An <br>Education!</span>
									</h3>
									<p class="text-center text-lg-left color-darkgrey fs-20 fw-500">
										<span>We want our clients to feel awesome <br>and unique. </span>
									</p>
									<div class="divider-35"></div>
									<div class="owl-custom-nav hidden-below-lg">
										<a href="#" class="owl-prev"><i class="fa fa-chevron-left"></i></a>
										<a href="#" class="owl-next"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-9">
							<div class="quote-carousel owl-carousel" data-margin="50" data-responsive-xl="4" data-responsive-ml="3" data-responsive-lg="2" data-responsive-md="1" data-responsive-sm="2" data-responsive-xs="1" data-dots="false" data-loop="true" data-autoplay="true">
								<div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="images/services/img_4.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="service-single.html"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="service-single.html" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="service-single.html">Kite Surfing</a>
											</h5>
											<p>
												From the most experienced kitesurfing teachers to the most
											</p>
										</div>
										<a href="service-single.html" class="btn-booking">Booking a Lesson</a>
									</div>
								</div>
								{{-- <div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="images/services/img_5.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="service-single.html"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="service-single.html" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="service-single.html">Kiteboarding</a>
											</h5>
											<p>
												From the most experienced kitesurfing teachers to the most
											</p>
										</div>
										<a href="service-single.html" class="btn-booking">Booking a Lesson</a>
									</div>
								</div> --}}
								<div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="images/services/img_1.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="service-single.html"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="service-single.html" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="service-single.html">Kiteschool</a>
											</h5>
											<p>
												From the most experienced kitesurfing teachers to the most
											</p>
										</div>
										<a href="service-single.html" class="btn-booking">Booking a Lesson</a>
									</div>
								</div>
								<div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="images/services/img_6.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="service-single.html"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="service-single.html" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="service-single.html">Sailing</a>
											</h5>
											<p>
												From the most experienced kitesurfing teachers to the most
											</p>
										</div>
										<a href="service-single.html" class="btn-booking">Booking a Lesson</a>
									</div>
								</div>
								<div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="images/services/img_3.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="service-single.html"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="service-single.html" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="service-single.html">Kite Repairs</a>
											</h5>
											<p>
												From the most experienced kitesurfing teachers to the most
											</p>
										</div>
										<a href="service-single.html" class="btn-booking">Booking a Lesson</a>
									</div>
								</div>
								<div class="vertical-item service-layout-1 ls">
									<div class="item-media">
										<img src="images/services/img_2.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="service-single.html"></a>
										</div>
									</div>
									<div class="item-content">
										<div class="item-content-wrap">
											<span class="cat-links">
												<span class="screen-reader-text">Categories</span>
												<a href="service-single.html" rel="category tag">
													Services
												</a>
											</span>
											<h5 class="mt-1">
												<a href="service-single.html">Equipment</a>
											</h5>
											<p>
												From the most experienced kitesurfing teachers to the most
											</p>
										</div>
										<a href="service-single.html" class="btn-booking">Booking a Lesson</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Gallery -->
			<section id="gallery" class="ls ds s-pt-90 s-pb-80 s-pt-xl-160 s-pb-xl-150 c-gutter-10">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="content-center">
								<div class="divider-lg-25 divider-xl-50"></div>
								<p class="text-center text-md-left color-main mb-1">
									<span class="line-left">Gallery</span>
								</p>
								<h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
									<span>Our Photos & Videos</span>
								</h3>
								<p class="text-center text-md-left color-darkgrey fs-20 fw-500">
									<span>We want our clients to feel awesome <br>and unique. </span>
								</p>
								<div class="divider-40 divider-lg-25 divider-xl-50"></div>
								<div class="post_format-post-format-video">
									<div class="embed-responsive embed-responsive-3by2">
										<a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
											<img src="images/bg-video.jpg" alt="img">
										</a>
									</div>
								</div>
								<div class="divider-10 divider-lg-0"></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row isotope-wrapper  c-mb-10">
								<div class="col-lg-12">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="images/gallery/27.jpg" alt="img">
										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
											</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="images/gallery/17.jpg" alt="img">
										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h5>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="images/gallery/28.jpg" alt="img">
										</div>
										<div class="item-content dark-bg">
											<h5>
												<a href="gallery-single.html">Consetetur sadipscing</a>
											</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Price -->
			<section id="price" class="ls s-pb-90 s-pt-85 s-pb-xl-160 s-pt-xl-155">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-center color-darkgrey mb-1">
								<span class="line-left">Pricing</span>
							</p>
							<h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
								<span>Aquavibes Programs</span>
							</h3>
							<p class="text-center color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome<br> and unique.</span>
							</p>
							<div class="divider-60 divider-xl-60"></div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="pricing-plan price-layout-1">
								<div class="price-bg s-overlay cs">
									<div class="price-wrap">
										<span class="plan-sign">DHs</span>
										<span class="plan-price">199</span>
									</div>
									<div class="plan-name">
										<h3>
											Private
										</h3>
									</div>
								</div>
								<div class="pricing-body hero-bg">
									<div class="plan-features text-center">
										<ul class="list-bordered">
											<li class="enabled">Transfers to Any Place</li>
											<li class="enabled">Course with IKO instructors</li>
											<li class="disabled">3 nights accommodation</li>
											<li class="disabled">IKO card-certificate</li>
										</ul>
									</div>
									<div class="plan-button">
										<a href="contact2.html" class="btn btn-maincolor">Book a Lesson</a>
									</div>
								</div>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="pricing-plan plan-featured price-layout-1 s-overlay cs">
								<div class="price-bg">
									<div class="price-wrap">
										<span class="plan-sign">DHs</span>
										<span class="plan-price">899</span>
									</div>
									<div class="plan-name">
										<h3>
											Semi Private
										</h3>
									</div>
								</div>
								<div class="pricing-body">
									<div class="plan-features text-center">
										<ul class="list-bordered">
											<li class="enabled">Transfers to Any Place</li>
											<li class="enabled">Course with IKO instructors</li>
											<li class="disabled">3 nights accommodation</li>
											<li class="disabled">IKO card-certificate</li>
										</ul>
									</div>
									<div class="plan-button">
										<a href="contact2.html" class="btn btn-maincolor">Book a Lesson</a>
									</div>
								</div>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-lg-4 col-md-6 mx-sm-auto">
							<div class="pricing-plan price-layout-1">
								<div class="price-bg s-overlay cs">
									<div class="price-wrap">
										<span class="plan-sign">DHs</span>
										<span class="plan-price">1299</span>
									</div>
									<div class="plan-name">
										<h3>
											Group
										</h3>
									</div>
								</div>
								<div class="pricing-body hero-bg">
									<div class="plan-features text-center">
										<ul class="list-bordered">
											<li class="enabled">Transfers to Any Place</li>
											<li class="enabled">Course with IKO instructors</li>
											<li class="disabled">3 nights accommodation</li>
											<li class="disabled">IKO card-certificate</li>
										</ul>
									</div>
									<div class="plan-button">
										<a href="contact2.html" class="btn btn-maincolor">Book a Lesson</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<!-- Section Testimonials -->
			<section id="testimonials" class="ls s-pb-90 s-pt-85 s-pb-xl-160 s-pt-xl-155">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-center color-darkgrey mb-1">
								<span class="line-left">Testimonials</span>
							</p>
							<h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
								<span>What People Say</span>
							</h3>
							<p class="text-center color-darkgrey fs-20 fw-500">
								<span>We want our clients to feel awesome<br> and unique. </span>
							</p>

							<div class="divider-40 divider-xl-60"></div>

							<div class="quote-carousel owl-carousel" data-margin="0" data-responsive-lg="4" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1" data-dots="false" data-loop="true" data-autoplay="true">
								<div class="quote-item quote-layout-1 vertical-item cover-image position-relative">
									<div class="quote-wrap text-center hero-bg position-relative">
										<img src="images/transparent-square.png" alt="img">
										<div class="quote-content ">
											<h6>Sylvia J. Roberts</h6>
											<p>
												As a sales gamification company, we were skeptical to work with a consultant to
											</p>
											<p class="social-icons">
												<a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
												<a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
												<a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
											</p>
										</div>
									</div>
									<div class="quote-image position-relative">
										<img src="images/team/06.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="team-single.html"></a>
										</div>
									</div>
								</div>
								<div class="quote-item quote-layout-1 vertical-item cover-image position-relative">
									<div class="quote-wrap text-center hero-bg position-relative">
										<img src="images/transparent-square.png" alt="img">
										<div class="quote-content ">
											<h6>Christopher T. Storm</h6>
											<p>
												As a sales gamification company, we were skeptical to work with a consultant to
											</p>
											<p class="social-icons">
												<a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
												<a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
												<a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
											</p>
										</div>
									</div>
									<div class="quote-image position-relative">
										<img src="images/team/04.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="team-single.html"></a>
										</div>
									</div>
								</div>
								<div class="quote-item quote-layout-1 vertical-item cover-image position-relative">
									<div class="quote-wrap text-center hero-bg position-relative">
										<img src="images/transparent-square.png" alt="img">
										<div class="quote-content ">
											<h6>Andrew D. Chandler</h6>
											<p>
												As a sales gamification company, we were skeptical to work with a consultant to
											</p>
											<p class="social-icons">
												<a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
												<a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
												<a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
											</p>
										</div>
									</div>
									<div class="quote-image position-relative">
										<img src="images/team/03.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="team-single.html"></a>
										</div>
									</div>
								</div>
								<div class="quote-item quote-layout-1 vertical-item cover-image position-relative">
									<div class="quote-wrap text-center hero-bg position-relative">
										<img src="images/transparent-square.png" alt="img">
										<div class="quote-content ">
											<h6>Margaret R. Delarosa</h6>
											<p>
												As a sales gamification company, we were skeptical to work with a consultant to
											</p>
											<p class="social-icons">
												<a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
												<a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
												<a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
											</p>
										</div>
									</div>
									<div class="quote-image position-relative">
										<img src="images/team/05.jpg" alt="img">
										<div class="media-links">
											<a class="abs-link" title="" href="team-single.html"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Section Mailchimp -->
			<section id="mail" class="section-mailchimp s-py-90 s-py-xl-100 s-overlay ds ms s-parallax">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<h3 class="special-heading text-center text-lg-left mb-2">
								<span>Get 30% Off Your First Order</span>
							</h3>
							<p class="text-center text-center text-lg-left fw-500 text-white fs-20">
								<span>Join our newsletter to receive the latest <br>updates and promotions.</span>
							</p>

							<div class="fw-divider-space divider-30 divider-xl-50"></div>
							<div class="widget widget_mailchimp">
								<form class="signup" action="https://html.modernwebtemplates.com/">
									<div class="mc4wp-form-fields">
										<div class="mailchimp-1">
											<span class="form-group">
												<input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="Enter Your Email">
											</span>
											<button type="submit" class="btn btn-maincolor btn-medium">Book a Lesson</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer ds ms s-py-90 s-py-xl-160 c-gutter-100">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-3 text-center text-lg-left animate" data-animation="fadeInUp">
							<div class="widget widget_text">
								<img src="images/logo.png" alt="logo">
								<p>
									The estuary is the well-known kite spot in the lagoon. Two launches are possible.
								</p>
								<p class="social-icons">
									<a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
									<a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
									<a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
								</p>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-xl-4 col-lg-5 text-center text-lg-left animate" data-animation="fadeInUp">
							<div class="widget widget_nav_menu">
								<h3>Userful Link</h3>
								<ul class="menu">
									<li class="menu-item">
										<a href="index_blocks.html">Homeblocks</a>
									</li>
									<li class="menu-item">
										<a href="about.html">About</a>
									</li>
									<li class="menu-item">
										<a href="team.html">Team</a>
									</li>
									<li class="menu-item">
										<a href="contact.html">Contact Us</a>
									</li>
									<li class="menu-item">
										<a href="pricing.html">Pricing</a>
									</li>
									<li class="menu-item">
										<a href="shortcodes_typography.html">Typography</a>
									</li>
									<li class="menu-item">
										<a href="shop-left.html">Shop</a>
									</li>
									<li class="menu-item">
										<a href="services2.html">Services</a>
									</li>
									<li class="menu-item">
										<a href="service-single.html">Single Service</a>
									</li>
									<li class="menu-item">
										<a href="gallery-tiled.html">Gallery</a>
									</li>
								</ul>
							</div>
							<div class="divider-60 divider-lg-0"></div>
						</div>

						<div class="col-xl-4 col-lg-4 text-center text-lg-left animate" data-animation="fadeInUp">
							<div class="widget widget_flickr">

								<h3 class="widget-title">Flickr</h3>
								<ul class="flickr_ul"></ul>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<section class="page_copyright ls s-py-25">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year">2020</span> All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="{{ asset('js/compressed.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/switcher.js') }}"></script>


</body>


<!-- Mirrored from html.modernwebtemplates.com/wavex/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 18:43:23 GMT -->
</html>
