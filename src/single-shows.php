<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="page-jumbo" style="background-image: url(<?php echo get_template_directory_uri() . '/img/about-main.png'; ?>);">
				<h2><?php the_title(); ?></h2>
				
				
			</div>

			<article class="about">
				<h2>About the show</h2>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php

						$tixlink = get_field("ticket_link", false, true);

					 ?>

				<a class="btn tix" href="<?php echo $tixlink; ?>">Buy Tickets</a>

					<?php the_content();

					// get custom field vars for later
					$address = get_field("google_map_address", false, true);
					$date = get_field("date", false, true);
					$tixdesc = get_field("ticketing_description", false, true);
					$sponsors = get_field("sponsors", false, true);

				endwhile; endif; ?>

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
				<p>Click one of the tabs above to get more information about the play.</p>

			</article>

			<!-- summer classes -->
		<!-- /summer classes -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="split-left">
					<h2>Ticket Prices & Calendar</h2>
					<p><?php echo $tixdesc; ?></p>
				</div>
				<div class="split-right">
					<img style="display: block;" src="<?php echo get_template_directory_uri() . '/img/Quill_calendar.png'; ?>" alt="Calendar">
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

			var latitude, longitude;

			var geocoder = new google.maps.Geocoder();
			var address = <?php echo json_encode($address); ?>;

			geocoder.geocode({ "address": address}, function(results, status){

					latitude = results[0].geometry.location.lat();
					longitude = results[0].geometry.location.lng();
				

			});

				function initialize() {

					var styles = [{
						stylers: [
						{ hue: "#7c1416" },
						{ saturation: -10 }
						]
					}];

					var myLatLng = new google.maps.LatLng(latitude, longitude);

					var mapOptions = {
						center: myLatLng,
						zoom: 13
					};

					var map = new google.maps.Map(document.getElementById('map-canvas'),
						mapOptions);
					map.setOptions({styles: styles});

					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map 
					});
				}
				google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<h2 class="top">Location</h2>
			<h3><?php echo $date; ?></h3>
			<div id="map-canvas"></div>
			<h2>Sponsors</h2>
			<?php echo $sponsors; ?>
		</article>
		<!-- /school performances -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>