<!DOCTYPE html>
<html class="no-js" lang="en">
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title() ?>Archi - Free Architecture Portfolio HTML Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="TemplatesJungle">
	<meta name="keywords" content="Free HTML Template">
	<meta name="description" content="Free HTML Template">
<?php //TODO Move to enqueue functions ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/vendor.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

	<div class="preloader"></div>

	<div class="nav nav-overlay">
		<div class="nav__content">
			<div class="container">
				<div class="row p-4 p-md-0 flex-column-reverse flex-md-row g-md-5 nav__block">
					<div class="col-md-5">
						<ul class="nav__list d-none d-md-block">
							<li class="nav__list-item active-nav"><a href="index.html" class="hover-target">Home</a>
							</li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Onepage</a></li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Styles</a></li>
							<li class="nav__list-item"><a href="index.html" class="hover-target">Blog</a></li>
							<li class="nav__list-item"><a href="single-post.html" class="hover-target">Single Post</a>
							</li>
							<li class="nav__list-item"><a href="contact.html" class="hover-target">Contact us</a></li>
						</ul>
					</div>
					<div class="col-md-4 text-white">
						<h3 class="text-white fw-bold nav__block-item">Contact info</h3>
						<p class="text-light nav__block-item">Officia nisi corrupti eaque cumque exercitationem labore
							sint sapiente rem neque temporibus id ratione perspiciatis, tenetur est repellendus
							aspernatur culpa repudiandae omnis.</p>
						<ul class="list-unstyled text-light nav__block-item">
							<li class="menu-item">
								<i class="icon icon-location me-2"></i>2489 Locust Court, Los Angeles
							</li>
							<li class="menu-item">
								<i class="icon icon-location2 me-2"></i>3927 Red Maple Drive, Los Angeles
							</li>
							<li class="menu-item">
								<i class="icon icon-phone me-2"></i>+63 667 341 3463
							</li>
							<li class="menu-item">
								<i class="icon icon-envelope-o me-2"></i><a href="#"
									class="text-white">contact@example.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 text-white">
						<h3 class="text-white fw-bold nav__block-item">Pages</h3>
						<ul class="list-unstyled nav__block-item">
							<li><a href="index.html" class="text-white">Onepage </a></li>
							<li><a href="index.html" class="text-white">Styles </a></li>
							<li><a href="index.html" class="text-white">Blog </a></li>
							<li><a href="index.html" class="text-white">Single Post </a></li>
							<li><a href="index.html" class="text-white">Contact us </a></li>
							<li><a href="index.html" class="text-white">Portfolio Masonry </a></li>
							<li><a href="index.html" class="text-white">Portfolio Grid </a></li>
							<li><a href="index.html" class="text-white">Portfolio Grid </a></li>
							<li><a href="index.html" class="text-white">Portfolio Grid </a></li>
							<li><a href="index.html" class="text-white">Single Portfolio </a></li>
							<li><a href="index.html" class="text-white">About Us </a></li>
							<li><a href="index.html" class="text-white">Our Team </a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main-logo"> 
		<a href="<?php echo get_home_url( '/' ); ?>">A.</a>
	</div>

	<div class="side-nav-bar">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
			<span></span>
		</label>
	</div>
	<?php
	// @TODO move this to a page template or template part
	?>

	<?php if ( ! is_singular() ): ?>
		<section id="intro" class="scrollspy-section">
			<div class="main-slider">
				<div class="slider-item jarallax" data-speed="0.2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg" alt="banner" class="jarallax-img">
					<div class="banner-content">
						<h2 class="banner-title txt-fx">Modern Designs</h2>
						<div class="btn-wrap">
							<a href="#" class="btn-with-line">View Project</a>
						</div>
					</div><!--banner-content-->
				</div><!--slider-item-->

				<div class="slider-item jarallax" data-speed="0.2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner2.jpg" alt="banner" class="jarallax-img">
					<div class="banner-content">
						<h2 class="banner-title txt-fx">Clean & Minimal</h2>
						<div class="btn-wrap">
							<a href="#" class="btn-with-line">View Project</a>
						</div>
					</div><!--banner-content-->
				</div><!--slider-item-->

				<div class="slider-item jarallax" data-speed="0.2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner3.jpg" alt="banner" class="jarallax-img">
					<div class="banner-content">
						<h2 class="banner-title txt-fx">Personalize and Customize</h2>
						<div class="btn-wrap">
							<a href="#" class="btn-with-line">View Project</a>
						</div>
					</div><!--banner-content-->
				</div><!--slider-item-->
			</div><!--slider-->

			<div class="button-container">
				<button class="prev slick-arrow">
					<i class="icon icon-chevron-thin-left"></i>
				</button>
				<button class="next slick-arrow">
					<i class="icon icon-chevron-thin-right"></i>
				</button>
			</div>
		</section>
	<?php endif; ?>