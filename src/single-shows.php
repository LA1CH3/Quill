<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="frontslide">

			  <?php

			  if( have_rows('slider_gallery') ):

			  	while( have_rows('slider_gallery') ) : the_row();

			  $image = get_sub_field('photo');

			   ?>
			    <div>
			      		<img src="<?php echo $image; ?>" alt="#"/>
			    </div>

			   <?php endwhile; endif; ?>
			</div>

			<article class="about">
				<h2><?php the_title(); ?></h2>

					<?php

						$tixlink = get_field("ticket_link", false, true);

					 ?>

				<a class="btn tix" target="_blank" href="https://henleystreet.showare.com/orderticketsarea.asp?p=88&a=24&backurl=default.asp
">Buy Tickets</a>

					<?php the_content();

					// get custom field vars for later
					$address = get_field("google_map_address", false, true);
					$date = get_field("date", false, true);
					$tixdesc = get_field("ticketing_description", false, true);
					$sponsors = get_field("sponsors", false, true);
					$photos = get_field("photos", false, true);
					$auditions = get_field("auditions", false, true);

					$calstart = get_field("calendar_start", false, true);
					$calend = get_field("calendar_end", false, true);

				endwhile; endif; ?>

				<ul class="tabs" data-content="<?php echo $post->ID; ?>">
					<li data-content="photos" class="btn selected">
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
				<?php echo $photos; ?>

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

				<?php if( has_category("current") ){ ?>
						
				    <div  id="show-cal"></div>

					<script>

						jQuery(document).ready(function(){
							jQuery("#show-cal").fullCalendar({
							height: 200,
							contentHeight: 200,
							defaultDate: <?php echo json_encode($calstart); ?>,
							events: [{
								title: <?php echo json_encode(get_the_title()); ?>,
								start: <?php echo json_encode($calstart); ?>,
								end: <?php echo json_encode($calend); ?>,
								now: <?php echo json_encode($calstart . 'T00:00:00'); ?>,
								url: <?php echo json_encode($tixlink); ?>
							}],
							eventColor: "#7c1416",
							eventTextColor: "white",
							hiddenDays: [1,2,3]
						});
					});

					</script>
				<?php } else { ?>
					<a class="btn red" target="_blank" href="<?php echo get_template_directory_uri() . '/inc/quill_1516season.pdf'; ?>">Subscribe by Mail</a>
					<a class="btn purple" target="_blank" href="https://henleystreet.showare.com/orderticketsarea.asp?p=88&a=24&backurl=default.asp">Subscribe Online</a>
				<?php } ?>
					
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

					var directionsService = new google.maps.DirectionsService();

					var styles = [{
						stylers: [
						{ hue: "#7c1416" },
						{ saturation: -10 }
						]
					}];

					var myLatLng = new google.maps.LatLng(latitude, longitude);

					var mapOptions = {
						center: myLatLng,
						zoom: 13,
					};

					var map = new google.maps.Map(document.getElementById('map-canvas'),
						mapOptions);
					map.setOptions({styles: styles});

					// Create a renderer for directions and bind it to the map.
					var rendererOptions = {
					    map: map
					}

  					directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions)

  					// Instantiate an info window to hold step text.
                    var stepDisplay = new google.maps.InfoWindow();

					var infoWindow = new google.maps.InfoWindow({
						content: address
					});

					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						title: address
					});

					google.maps.event.addDomListener(marker, 'click', function(){
						infoWindow.open(map, marker);
					});
				}

				google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<h2 class="top">Location</h2>
                        <h3><?php echo $address; ?></h3>
			<div id="map-canvas"></div>
			</article>

			<article>
			<h2>Sponsors</h2>
			<?php echo $sponsors; ?>
			</article>
		</article>
		<!-- /school performances -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>