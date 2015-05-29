<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); 

			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, "full");
  			$thumb_url = $thumb_url_array[0];

			?>

			<div class="page-jumbo" style="background-image: url(<?php echo $thumb_url; ?>);">
				
			</div>

			<!-- article -->
			<article class="about-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
			<h2>Senior Staff</h2>
			<ul class="listing">


			<?php

				$args = array(

					'post_type' => 'staff',
					'orderby' => 'menu_order',
					'posts_per_page' => 4

					);

				$staffquery = new WP_Query($args);

				if( $staffquery->have_posts() ) : while( $staffquery->have_posts() ) : $staffquery->the_post();

				$title = get_field("title", false, true);

			 ?>

				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
						<div class="list-hover">
							<h3><?php the_title(); ?></h3>
							<p><?php echo $title; ?></p>
							<a class="learn-more" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
				</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
			<a href="http://quilltheatre.org/about/full-staff/" class="btn purple" target="_blank">Full Staff</a>
			<a href="http://quilltheatre.org/about/board-of-trustees/" class="btn purple" target="_blank">Board</a>
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