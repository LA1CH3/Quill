<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/volunteer-main.png'; ?>);">
				<h2>Workshops & Summer Classes</h2>
				
			</div>

		

			<!-- article -->
			<article id="post">

			<h2>Volunteer Photos</h2>

				<div id="slider" class="flexslider volunteer">
			  <ul class="slides">

			  <?php

			  if (have_posts()): while (have_posts()) : the_post();

			  if( have_rows('volunteer_photos') ):

			  	while( have_rows('volunteer_photos') ) : the_row();

			  $image = get_sub_field('volunteer_photo');

			   ?>
			    <li data-thumb="<?php echo $image; ?>">
			    	<a href="<?php the_permalink(); ?>">
			      		<img src="<?php echo $image; ?>" alt="#"/>
			      	</a>
			    </li>

			   <?php endwhile; endif; ?>
			  </ul>
			</div>

			</article>
			<!-- /article -->

	<?php endwhile; endif; wp_reset_postdata(); ?>
		<!-- /our staff -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>