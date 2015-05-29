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
			<article id="post">

				<?php $author = get_field('author', false, true); ?>

				<h2 class="title-left"><?php the_title(); ?></h2>
				<?php if($author){ ?>
				<h3 class="title-right">By: <?php echo $author; ?></h3>
				<?php } ?>

				<div class="split-onethird">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="split-twothirds">
					<?php the_content(); ?>
				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

			</article>
			<!-- /article -->

		<!-- /our staff -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>