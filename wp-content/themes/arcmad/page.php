<?php get_header();  ?>

	<section id="about" class="scrollspy-section padding-xlarge">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="section-header">
						<div class="title">
							<span>who are we</span>
						</div>
						<h2 class="section-title"><?php echo get_the_title() ?></h2>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-12 description text-lead">
					<?php the_content(); ?>

					<div class="btn-wrap">
						<a href="#" class="btn btn-accent btn-xlarge btn-rounded">View my portfolio</a>
					</div>

				</div>

			</div>

		</div>
	</section>

<?php get_footer();  ?>