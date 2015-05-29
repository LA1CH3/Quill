<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<div class="frontslide">
			  

			  <?php

			  $args = array(

			  	'post_type' => 'old_plays',
			  	'posts_per_page' => -1

			  	);

			  $oldquery = new WP_Query($args);

			  if( $oldquery->have_posts() ) : while( $oldquery->have_posts() ) : $oldquery->the_post(); 

			  $thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, "full");
  				$thumb_url = $thumb_url_array[0];

			   ?>
			    <div>
			      		<img src="<?php echo $thumb_url; ?>" alt="#"/>
			    </div>

			   <?php endwhile; endif; wp_reset_postdata(); ?>
			</div>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h2>Welcome to Quill Theatre!</h2>
				<h3>"I feel now the future in the instant." - Macbeth</h3>
				<p>Friends,</p>
				<p>Our 2015-2016 season celebrates our emergence as Quill Theatre! We have taken the best of Henley Street Theatre and Richmond Shakespeare and combined them into a strong, new amalgam that will carry us forward into a new era of courage, eloquence, power, and vitality.</p>
				<p>We are energized by the multiple meanings of “quill” — it’s a writing instrument with infinite flexibility, a penetrating sharp, a delicate and ephemeral adornment. As Quill Theatre, we will adventure through the full spectrum of our theatre’s capability, elasticity, and potency.”</p>
				<p>This season’s plays celebrate the motive power of intellect, the revolutionary magic of eloquence, and the audacious exhilaration of authenticity. We will bring you the utmost variety in our Shakespeare selections: a delightful comedy, a devastating tragedy, a wicked bloodbath, and a poignant synthesis of both — as well as a Helen Hayes Award-winning Best New Play, an early masterwork by one of America’s finest 20th century theatrical writers, and a tender, haunting story of rural Southern childhood.</p>
				<p>Don’t miss a moment of the Quill! It is truly “Theatre worth talking about.”</p>
				<h3>– Jan, Jacquie and all of us at Quill Theatre! </h3>
				


				<p>Join our family as a season subscriber and enjoy a savings of over 25% and avoid the ticketing fees too! $162 for all six main stage performances. Add $25 donation to your subscription for reserved seats to this year’s Bootleg Shakespeare- Macbeth on October 31st.</p>

						<div class="split-left">
						<a href="https://henleystreet.showare.com/orderticketsarea.asp?p=88&a=24&backurl=default.asp" class="btn red" target="_blank">Purchase a 2015-16 Season Subscription by Credit Card</a>
						
						</div>
						<div class="split-right">
						<a href="http://quilltheatre.org/wp-content/themes/html5blank/src/inc/quill_1516season.pdf" class="btn red" target="_blank">Purchase a 2015-16 Season Subscription By Mail</a>
						</div>
				</div>


				

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