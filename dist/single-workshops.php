<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/workshop-single.png'; ?>);">
				<h2>Workshops & Summer Classes</h2>
				
			</div>

		

			<!-- article -->
			<article id="article-workshop">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); 

				$info = get_field("workshop_info", false, true);

				?>

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