<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( !is_404() ) { ?>
	<!-- FOOTER -->
		<section class="main-section full-block main-footer foo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-SergioCamalich.svg" alt=""></a>
			<footer class="main-footer-bottom">
				<div class="center-block">
					<p class="left"><?php echo copyright_date(); ?> Sergio Camalich</p>
					<p class="right">If you're reading this, your soul now belongs to me. And your house. And what you're wearing.</p>
				</div>
			</footer>
		</section>
		<!-- //FOOTER -->

</div> <!-- /BIG PARENT -->
<?php } ?>

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>
	if (!window.jQuery) {
			document.write('<script src="js/jquery.js"><\/script>');
	}
	</script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script type="text/javascript" src="https://raw.githubusercontent.com/tuupola/jquery_lazyload/master/jquery.lazyload.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
	<?php if (is_page('about-me')) { ?>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhhc-9K4K3xPoyNNBjrvdSFtDhrDJttX4&callback=initMap"></script>

		<script type="text/javascript">

		// The latitude and longitude of your business / place
		var position = [<?php the_field('latitude'); ?>, <?php the_field('longitude') ?>];

		function showGoogleMaps() {

		    var latLng = new google.maps.LatLng(position[0], position[1]);

		    var mapOptions = {
		        zoom: 12, // initialize zoom level - the max value is 21
		        streetViewControl: false, // hide the yellow Street View pegman
		        scaleControl: true, // allow users to zoom the Google Map
		        mapTypeId: google.maps.MapTypeId.ROADMAP,
		        center: latLng,
						disableDefaultUI: true,
						styles: [
						  {
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#f5f5f5"
						      }
						    ]
						  },
						  {
						    "elementType": "labels.icon",
						    "stylers": [
						      {
						        "visibility": "off"
						      }
						    ]
						  },
						  {
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#616161"
						      }
						    ]
						  },
						  {
						    "elementType": "labels.text.stroke",
						    "stylers": [
						      {
						        "color": "#f5f5f5"
						      }
						    ]
						  },
						  {
						    "featureType": "administrative.land_parcel",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#bdbdbd"
						      }
						    ]
						  },
						  {
						    "featureType": "poi",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#eeeeee"
						      }
						    ]
						  },
						  {
						    "featureType": "poi",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#757575"
						      }
						    ]
						  },
						  {
						    "featureType": "poi.park",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#e5e5e5"
						      }
						    ]
						  },
						  {
						    "featureType": "poi.park",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#9e9e9e"
						      }
						    ]
						  },
						  {
						    "featureType": "road",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#ffffff"
						      }
						    ]
						  },
						  {
						    "featureType": "road.arterial",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#757575"
						      }
						    ]
						  },
						  {
						    "featureType": "road.highway",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#dadada"
						      }
						    ]
						  },
						  {
						    "featureType": "road.highway",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#616161"
						      }
						    ]
						  },
						  {
						    "featureType": "road.local",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#9e9e9e"
						      }
						    ]
						  },
						  {
						    "featureType": "transit.line",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#e5e5e5"
						      }
						    ]
						  },
						  {
						    "featureType": "transit.station",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#eeeeee"
						      }
						    ]
						  },
						  {
						    "featureType": "water",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#c9c9c9"
						      }
						    ]
						  },
						  {
						    "featureType": "water",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#9e9e9e"
						      }
						    ]
						  }
						]
		    };

				var image = {
						 url: 'http://www.esecamalich.com/images/marker2.svg',
						 // This marker is 20 pixels wide by 32 pixels high.
						 size: new google.maps.Size(42, 64),
						 origin: new google.maps.Point(10,0),
						 anchor: new google.maps.Point(30,60)
					 };

		    map = new google.maps.Map(document.getElementById('googlemaps'),
		        mapOptions);

		    // Show the default red marker at the location
		    marker = new google.maps.Marker({
		        position: latLng,
		        map: map,
		        draggable: false,
						icon: image
		    });

				//marker.setMap(null);
		}

		google.maps.event.addDomListener(window, 'load', showGoogleMaps);
		</script>
	<?php } ?>
	<script>
		// JavaScript
		window.sr = ScrollReveal();
		sr.reveal('.foo', { reset: true, duration: 1000, origin: 'bottom', scale: 1, distance: '0' });
		sr.reveal('.bar', { reset: true, duration: 1000, viewFactor: 0.1 }, 50);
	</script>
</body>
</html>
