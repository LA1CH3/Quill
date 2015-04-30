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

			<?php

			$args = array(

				'post_type' => 'workshops'

				);

			$shopquery = new WP_Query($args);

			if( $shopquery->have_posts() ) : while( $shopquery->have_posts() ) : $shopquery->the_post(); 

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

			<?php


			$args = array(


				'post_type' => 'school_performances'


				);

			$schoolquery = new WP_Query($args);

			if( $schoolquery->have_posts() ) : while( $schoolquery->have_posts() ) : $schoolquery->the_post();

			 ?>

				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
						<div class="list-hover">
							<h3><?php the_title(); ?></h3>
							<a class="learn-more" href="#">Learn More ></a>
						</div>
					</li>
					
			<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>
		</article>
		<!-- /school performances -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>