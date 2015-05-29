<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="frontslide">
			  

			  <div>
			  	<a href="http://quilltheatre.org/wp-content/themes/html5blank/src/inc/Quill_PR.pdf">
			  		<img src="<?php echo get_template_directory_uri() . '/img/quill_press_slide.png'; ?>" alt="Quill Theatre">
			  	</a>
			  </div>

			  <?php

			  $args = array(

			  	'post_type' => 'shows',
			  	'posts_per_page' => 9,
			  	'orderby' => 'menu_order'

			  	);

			  $showquery = new WP_Query($args);

			  if( $showquery->have_posts() ) : while( $showquery->have_posts() ) : $showquery->the_post(); 

				  $thumb_id = get_post_thumbnail_id();
				  $thumb_url_array = wp_get_attachment_image_src($thumb_id, "full");
				  $thumb_url = $thumb_url_array[0];

			   ?>
			    <div>
			    	<a href="<?php the_permalink(); ?>">
			      		<?php the_post_thumbnail(); ?>
			      	</a>
			    </div>

			   <?php endwhile; endif; wp_reset_postdata(); ?>

			</div>

			 <ul class="show-links">
				
				<?php

			  $args = array(

			  	'post_type' => 'shows',
			  	'posts_per_page' => 9,
			  	'orderby' => 'menu_order'

			  	);

			  $showquery = new WP_Query($args);

			  if( $showquery->have_posts() ) : while( $showquery->have_posts() ) : $showquery->the_post(); 

				  $thumb_id = get_post_thumbnail_id();
				  $thumb_url_array = wp_get_attachment_image_src($thumb_id, "full");
				  $thumb_url = $thumb_url_array[0]; ?>

			  	<li>
			  		<a href="<?php the_permalink(); ?>">
			  			<div class="overlay"></div>
			  			<img src="<?php echo $thumb_url; ?>" alt="<?php echo get_the_title(); ?>">
			  		</a>
			  	</li>

			  <?php endwhile; endif; wp_reset_postdata(); ?>
			  </ul>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
