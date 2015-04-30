<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/about-main.png'; ?>);">
				
				
			</div>

			<article class="about">
				<h2>About the show</h2>
				<a class="btn tix" href="#">Buy Tickets</a>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

				<ul class="tabs" data-content="<?php echo $post->ID; ?>">
					<li data-content="photos" class="btn">
						<a href="<?php echo bloginfo('template_directory'); ?>/inc/showajax.php?id=<?php echo $post->ID; ?>">Photos</a>
					</li>
					<li data-content="talk-backs" class="btn">
						<a href="#">Talkbacks</a>
					</li>
					<li data-content="reviews" class="btn">
						<a href="#">Reviews</a>
					</li>
					<li data-content="video" class="btn">
						<a href="#">Video</a>
					</li>
					<li data-content="cast" class="btn">
						<a href="#">Cast</a>
					</li>
				</ul>


			</article>

			<article class="ajax-show">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta nisi metus, vel faucibus libero bibendum egestas. In commodo tristique elementum. Vivamus turpis libero, aliquam pellentesque fringilla nec, finibus id urna. Phasellus nisl lorem, sagittis quis arcu quis, venenatis lacinia tellus. Nam consequat eleifend eros et viverra. Duis nec maximus erat, ut hendrerit ex. Nunc tempus malesuada lorem, eget porttitor ex suscipit commodo. Duis ut scelerisque augue. Ut ac velit velit. Aenean sapien ligula, iaculis vitae placerat ac, gravida et ex.</p>

			<p>Fusce a aliquam nisi. Aliquam erat volutpat. Integer rutrum mattis felis, eu vehicula libero congue vitae. Nullam egestas lectus at euismod bibendum. Vestibulum leo nunc, sollicitudin nec turpis et, rhoncus tempus leo. Sed eget neque at neque luctus facilisis quis eget tortor. Ut accumsan ex id ipsum varius, in convallis ligula eleifend. Sed semper risus eget enim bibendum mollis.</p>
			</article>

			<!-- summer classes -->
		<!-- /summer classes -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="split-left">
					<h2>Ticket Prices & Calendar</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta nisi metus, vel faucibus libero bibendum egestas. In commodo tristique elementum. Vivamus turpis libero, aliquam pellentesque fringilla nec, finibus id urna. Phasellus nisl lorem, sagittis quis arcu quis, venenatis lacinia tellus. Nam consequat eleifend eros et viverra. Duis nec maximus erat, ut hendrerit ex. Nunc tempus malesuada lorem, eget porttitor ex suscipit commodo. Duis ut scelerisque augue. Ut ac velit velit. Aenean sapien ligula, iaculis vitae placerat ac, gravida et ex.</p>
				</div>
				<div class="split-right">
					<img src="<?php echo get_template_directory_uri() . '/img/Quill_calendar.png'; ?>" alt="Calendar">
				</div>
				

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

		<!-- school performances -->
		<article class="location">
			<script type="text/javascript"
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwKLaKFqCqNs61pylmB8Yqj6I0v1LhE-A">
			</script>
			<script type="text/javascript">
				function initialize() {
					var mapOptions = {
						center: { lat: -34.397, lng: 150.644},
						zoom: 8
					};
					var map = new google.maps.Map(document.getElementById('map-canvas'),
						mapOptions);
				}
				google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<h2 class="top">Location</h2>
			<h3>July 7 - 31, 2016</h3>
			<div id="map-canvas"></div>
			<h2>Sponsors</h2>
			<p>Sponsors would go here</p>
		</article>
		<!-- /school performances -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>