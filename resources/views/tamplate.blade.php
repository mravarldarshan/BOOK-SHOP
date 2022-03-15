<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user'))
{
	$user= session::get('user')['name'];
  $total= ProductController::cartItem();
}
//use session;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>@yield('title')</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="/css/responsive.css">
	<!--slider-->
	<link rel="stylesheet" href="/css/homepage.css">
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="/home">
								<img src="/img/agoslogo.jpg" width="40px" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="/">Home</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/shop">shop</a></li>
								<li><a href="/contact">contact</a></li>
								<li><a href="/blog">blog</a></li>
								
								<li>
									<div class="header-icons">
                                        <a href="login"><img src="/img/user.jpg" width="25px" alt=""></a>
										@if(Session::has('user'))
										<a href="#">{{Session::get('user')['name']}}</a>
										@endif															
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a href="cartlist">cart({{$total}})</a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										@if(Session::has('user'))
										<a href="/logout">logout</a>
										@else
										<a href="/login">login</a>
										@endif
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="search books">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hader benner-->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
								<h1>@yield('title')</h1>
							<div class="hero-btns">
								<a href="/shop" class="boxed-btn">explore more</a>
								<a href="/contact" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hader benner -->
@yield('content')
	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="/home">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/shop">Shop</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/blog">blog</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - agos book store,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="/js/sticker.js"></script>
	<!-- main js -->
	<script src="/js/main.js"></script>

</body>
</html>