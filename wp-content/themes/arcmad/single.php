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

            <?php //TODO add a chedk for makign a single post full width if there is no image  ?>

                <?php if ( has_post_thumbnail() ) : ?>

				<div class="col-md-6">
					<figure class="jarallax-keep-img">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'jarallax-img single-image', 'title' => 'Feature image']); ?>
					</figure>
				</div>
                <?php endif; ?>

				<div class="col-md-6 description text-lead">
					<?php the_content(); ?>

					<div class="btn-wrap">
						<a href="#" class="btn btn-accent btn-xlarge btn-rounded">View my portfolio</a>
					</div>

				</div>

			</div>

		</div>
	</section>

<?php // @TODO Use for related posts later on ?>

<?php arcmad_display_latest_posts( 3 ); ?>

    <?php get_footer();  ?>