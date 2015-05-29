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

			<article class="page">

				<?php the_content(); ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</article>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
