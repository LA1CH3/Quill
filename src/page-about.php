<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/about-main.png'; ?>);">
				<h2><?php the_title(); ?></h2>
				
			</div>

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

		<!-- Our staff -->
		<article>
			<h2>Our Staff</h2>
			<ul class="listing">
				<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Jacquie O'Connor</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Jan Powell</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice">
						<div class="list-hover">
							<h3>Brittany Keegan</h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
			</ul>
		</article>
		<!-- /our staff -->

		<article>
			<h2>Contact Us</h2>
				
				<?php echo do_shortcode('[gravityform id="1" title="false" description="true"]'); ?>

			</form>
		</article>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>