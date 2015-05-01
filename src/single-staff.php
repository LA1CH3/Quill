<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/about-main.png'; ?>);">
				<h2>Staff</h2>
			</div>

			<article class="staff">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php

				// get custom field values
				$title = get_field("title", false, true);
				$email = get_field("email", false, true);

				 ?>

				<h2><?php the_title(); ?></h2>

				<div class="split-onethird">
					<?php the_post_thumbnail(); ?>
					<h3><?php echo $title; ?></h3>
					<a class="btn" href="mailto:<?php echo $email; ?>">Email</a>
				</div>

				<div class="split-twothirds">
					<?php the_content(); ?>
				</div>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</article>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>