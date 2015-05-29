<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/volunteer_jumbo.jpg'; ?>);">
				
			</div>

			  <?php

			  if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- /article -->

		<!-- Our staff -->
		<article>
			<h2>Become a Quill Theatre Volunteer</h2>
			<?php the_content(); ?>
			
		</article>

	<?php endwhile; endif; wp_reset_postdata(); ?>
		<!-- /our staff -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>