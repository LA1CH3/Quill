<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/volunteer-main.png'; ?>);">
				<h2>School Performances</h2>
				
			</div>

			<!-- article -->
			<article id="post">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); 

				$author = get_field('author', false, true); ?>

				<h2 class="title-left"><?php the_title(); ?></h2>
				<h3 class="title-right">By: <?php echo $author; ?></h3>

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