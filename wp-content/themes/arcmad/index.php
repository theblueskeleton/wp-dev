<?php get_header();  ?>

	<section id="about" class="scrollspy-section padding-xlarge">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="section-header">
						<div class="title">
							<span>who are we</span>
						</div>
						<h2 class="section-title">About Us</h2>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-6">
					<figure class="jarallax-keep-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/singleimage.jpg" alt="about us" class="jarallax-img single-image">
					</figure>
				</div>
				<div class="col-md-6 description text-lead">
					<p><strong>Amet, consectetur adipiscing elit. Commodo viverra eu volutpat amet, leo ultrici non
							senectus odio dolor. Id at urna non porttitor elentum. Viverra senectus lorem ipsum dolor
							sit adui ultricies dolor varius nibh velit viverra euen.</strong></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo viverra eu volutpat amet, leo
						non senetus odio dolor. Id at urna non portitor etum. Vivera senectus elit dui ultricies dolor.
						Varius nibh velit pellentesque sapien, sapien neque dignissim.</p>
					<p>Commodo vivera eu volutpat amet, leo non senectus odio dolor. Id at urna non porttitor elementum.
						Viverra senectus dui ultricies dolor.</p>

					<div class="btn-wrap">
						<a href="#" class="btn btn-accent btn-xlarge btn-rounded">View my portfolio</a>
					</div>

				</div>

			</div>

		</div>
	</section>

	<section id="portfolio" class="scrollspy-section bg-dark padding-large">
		<div class="container">

			<div class="row">
				<div class="col-md-12">

					<div class="section-header">
						<div class="title">
							<span>Some of Our Works</span>
						</div>
						<h2 class="section-title light">Our Portfolio</h2>
					</div>
				</div>
			</div>

			<div class="row">

				<div id="filters" class="button-group d-flex flex-wrap gap-4 py-5" data-aos="fade-up">
					<a href="#" class="btn btn-outline-light rounded-pill text-uppercase is-checked"
						data-filter=".design">Design</a>
					<a href="#" class="btn btn-outline-light rounded-pill text-uppercase"
						data-filter=".interior">Interior</a>
					<a href="#" class="btn btn-outline-light rounded-pill text-uppercase"
						data-filter=".landscape">Landscape</a>
					<a href="#" class="btn btn-outline-light rounded-pill text-uppercase"
						data-filter=".construction">Construction</a>
				</div>

			</div>

			<div class="grid p-0 clearfix row row-cols-2 row-cols-lg-3 row-cols-xl-3" data-aos="fade-up">
				<div class="col mb-4 portfolio-item construction interior">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 1."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-1.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item construction construction">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 2."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-2.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item construction">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 3."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-11.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item construction">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 4."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-4.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item interior">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 5."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-5.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item design">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 6."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-6.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item design">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 7."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-7.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item design">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 8."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-8.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item design">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 9."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-9.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item design">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item1 0."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-10.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item design">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item1 1."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-11.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item construction">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item1 2."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-2.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item interior">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 1."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-3.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item landscape">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 2."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-8.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item landscape">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 3."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-1.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item interior">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 4."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-4.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item interior">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 5."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-5.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item interior">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 6."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-6.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item landscape">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 7."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-7.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item landscape">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item 8."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-8.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item landscape">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item1 0."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-10.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item construction">
					<a href="images/portfolio-large-1.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item1 1."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-11.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item landscape">
					<a href="images/portfolio-large-2.jpg" class="image-link"
						title="Sample Caption goes here for Portfolio Item1 2."><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio-thumb-1.jpg"
							class="img-fluid" alt="portfolio"></a>
				</div>
			</div>

		</div>
	</section>

	<section id="services" class="scrollspy-section padding-large">
		<div class="container">
			<div class="row">
				<div class="section-header col-12">
					<div class="title">
						<span>what we do</span>
					</div>
					<h2 class="section-title">Services</h2>
				</div>

			</div>

			<div class="row">

				<div class="col-md-4">
					<div class="services-item">
						<span class="number">01</span>
						<h3>Architecture Portfolio</h3>
						<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.
						</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="services-item">
						<span class="number">02</span>
						<h3>Planning Process</h3>
						<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.
						</p>
					</div>

				</div>

				<div class="col-md-4">
					<div class="services-item">
						<span class="number">03</span>
						<h3>Unique Design</h3>
						<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.
						</p>
					</div>
				</div>

			</div>

		</div>
	</section>

	<section id="subscribe" class="scrollspy-section padding-small">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<figure class="subscribe-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/subscribe-image.png" alt="subscribe">
					</figure>
				</div>
				<div class="col-md-6">
					<div class="subscribe-content">
						<h2 class="section-title">subscribe us</h2>
						<p>Join our newsletter to stay updated with super discounts and amazing offers. 300+ have
							already subscribed us.</p>
						<form id="form">
							<input type="text" name="email" placeholder="enter your email address">
							<button class="btn btn-accent btn-rounded btn-full btn-xlarge">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php // include 'latest-posts.php'; ?>
<?php arcmad_display_latest_posts( 2 ); ?>

	<section id="contact" class="scrollspy-section bg-dark padding-large">
		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<div class="left-content">

						<div class="section-header">
							<div class="title">
								<span>Get in touch</span>
							</div>
							<h2 class="section-title light">Contact us</h2>
						</div>

						<p>If you have any question about our process or company? Let us know how we can help you.</p>

						<form id="form-contact" class="form-light" action="contact.php">
							<p>
								<input type="text" name="name" placeholder="Your Full Name*" required>
							</p>
							<p>
								<input type="text" name="email" placeholder="Your Email Address" required>
							</p>
							<p>
								<textarea name="message" placeholder="Your Message" required></textarea>
							</p>
							<p>
								<label for="agree">
									<input id="agree" name="agree" type="checkbox" required></input>
									<span>I agree to privacy policy</span>
								</label>
							</p>
							<button class="btn btn-accent btn-rounded btn-xlarge btn-full">Submit</button>
						</form>


					</div>

				</div><!--left-content-->

				<div class="col-md-6">
					<div class="right-content">

						<div class="iconbox">
							<i class="icon icon-location"></i>
							<div class="detail">
								<strong>Address 1:</strong>
								<p>3927 Red Maple Drive, Los Angeles</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-location2"></i>
							<div class="detail">
								<strong>Address 2:</strong>
								<p>2489 Locust Court, Los Angeles</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-phone"></i>
							<div class="detail">
								<strong>Phone:</strong>
								<p>+63 667 341 3463</p>
							</div>
						</div>
						<div class="iconbox">
							<i class="icon icon-mail3"></i>
							<div class="detail">
								<strong>Email:</strong>
								<p><a href="#">contact@example.com</a></p>
							</div>
						</div>

					</div>
				</div><!--right-content-->

			</div>

		</div>
	</section>

	<section id="testimonial" class="padding-large">
		<div class="container">

			<div class="row">

				<div class="col-md-6">

					<figure class="jarallax-keep-img testimonial-image" data-speed="0.5">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/review-bg.jpg" alt="review" class="jarallax-img">
					</figure>

				</div>

				<div class="col-md-6">

					<div class="testimonial-block">
						<div class="section-header">
							<div class="title">
								<span>What clients says</span>
							</div>
							<h2 class="section-title">Testimonials</h2>
						</div>
						<div class="testimonials-inner">
							<q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Placerat venenatis tempor,
								turpis dolor. Aliquam faucibus velit, volutpat vulputate risus urna enim.</q>
							<div class="testimonial-author">
								<div class="author-detail">
									<div class="name">Lucifer</div>
									<div class="author-title">CEO, unity real state</div>
								</div>
							</div>
						</div>
					</div><!--reviews-content-->

				</div>
			</div><!--grid-->

		</div>
	</section>


	<?php get_footer();  ?>