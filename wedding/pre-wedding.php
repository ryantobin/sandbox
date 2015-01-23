<!DOCTYPE html>
<html>

<head>
	<link href="wedding.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    var mapCanvas = document.getElementById('map_canvas_CH');
    var CHLatLng = new google.maps.LatLng(45.0197533,-73.6459583);
    var mapOptions = {
      center: CHLatLng,
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var markerOptions = {
    	position: CHLatLng,
    	map: map,
    	title: '267 Covey Hill Rd, Hemmingford, QC'
    };
    var marker = new google.maps.Marker(markerOptions);
	}
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<body>
	<div id='content'>
		<?php include 'top.php'; ?>
		<div id='our-story-body-bg'></div>
		<div id='our-story-body'>
			<div id='osimg'></div>
			<div class='text'>
				<header>Our Story...</header>
				<p>
					Kristen and Ryan have been dating for 5 years, 
					though most people have probably heard the story 
					of their meeting, there is much to tell of the 
					time the two have had and shared together.
				</p>
				<p>
					Once upon a time, there was a pub named <i>Next Door</i>...
				</p>
			</div>
			<div class='maps'>
 				<div class='map_canvas' id="map_canvas_CH"></div>
			</div>
		</div>

		<div id='bottom-menu'></div>
	</div>
	<div id='footer'></div>
</body>
</html>