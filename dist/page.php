<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/about-main.png'; ?>);">
				<h2><?php the_title(); ?></h2>
			</div>

			<article class="page">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</article>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
