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


			<?php

				$args = array(

					'post_type' => 'staff'

					);

				$staffquery = new WP_Query($args);

				if( $staffquery->have_posts() ) : while( $staffquery->have_posts() ) : $staffquery->the_post();

			 ?>

				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
						<div class="list-hover">
							<h3><?php the_title(); ?></h3>
							<a class="learn-more" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
				</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
		</article>
		<!-- /our staff -->

		<article class="article-contact">
			<h2>Contact Us</h2>
				
				<?php echo do_shortcode('[gravityform id="1" title="false" description="true" ajax="true"]'); ?>

			</form>
		</article>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>