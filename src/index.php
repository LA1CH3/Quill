<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div id="slider" class="flexslider frontslider">
			  <ul class="slides">

			  <?php

			  $args = array(

			  	'post_type' => 'shows',
			  	'posts_per_page' => 5

			  	);

			  $showquery = new WP_Query($args);

			  if( $showquery->have_posts() ) : while( $showquery->have_posts() ) : $showquery->the_post(); 

			  $thumb_id = get_post_thumbnail_id();
			  $thumb_url_array = wp_get_attachment_image_src($thumb_id);
			  $thumb_url = $thumb_url_array[0];

			   ?>
			    <li data-thumb="<?php echo $thumb_url; ?>">
			    	<a href="<?php the_permalink(); ?>">
			      		<?php the_post_thumbnail(); ?>
			      	</a>
			    </li>

			   <?php endwhile; endif; wp_reset_postdata(); ?>
			  </ul>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
