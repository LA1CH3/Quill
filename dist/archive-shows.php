<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/shows-main.png'; ?>);">
				<h2>Shows</h2>
				
			</div>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<ul class="listing">

				<?php

					if( have_posts() ) : while( have_posts() ) : the_post();

				 ?>

					<li>
						<!-- <img src="<?php echo get_template_directory_uri() . '/img/thumb.jpg'; ?>" alt="The Merchant of Venice"> -->

						<a href="<?php the_permalink(); ?>">

						<?php 

						the_post_thumbnail();

						?>

						</a>

						<div class="list-hover">
							<h3><?php the_title(); ?></h3>
							<a class="learn-more" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
					</li>
					
					<?php endwhile; endif; wp_reset_postdata(); ?>

				</ul>

				<br class="clear">

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
