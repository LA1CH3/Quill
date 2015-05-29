<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); 

				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, "full");
  				$thumb_url = $thumb_url_array[0];

				?>

			<div class="page-jumbo" style="background-image: url(<?php echo $thumb_url; ?>);">
				
			</div>

		

			<!-- article -->
			<article id="article-workshop">

				<?php $info = get_field("workshop_info", false, true); ?>

				

				<div class="split-twothirds">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<div class="split-onethird">
					<?php echo $info; ?>
				</div>


			</article>
			<!-- /article -->

	<?php endwhile; endif; wp_reset_postdata(); ?>
		<!-- /our staff -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>