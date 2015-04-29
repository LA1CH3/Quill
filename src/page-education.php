<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/about-main.png'; ?>);">
				<h2><?php the_title(); ?></h2>
				
			</div>

			<!-- summer classes -->
			<article>
			<h2>Workshops & Summer Classes</h2>
			<ul class="listing">
				<li>
					<a href="#">
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
					</a>
						<div class="list-hover">
							<h3>Festival Young Company</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Bard Basics</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Bard Boot Camp</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
			</ul>
		</article>
		<!-- /summer classes -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		<!-- school performances -->
		<article>
			<h2>School Performances</h2>
			<ul class="listing">
				<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Romeo & Juliet</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>The Complete Works of William Shakespeare</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Lorem Ipsum</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
			</ul>
		</article>
		<!-- /school performances -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>