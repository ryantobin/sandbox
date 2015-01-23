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
		<div id='events'>		
			<div id='events-info-body-bg'></div>
			<div id='events-info-body'>				
				<header>Events</header>
				<h2>Pre-Wedding Activities</h2>
				<h3>Montreal or Adirondacks - TBD</h3>
				Week of Monday, August 27th
				<br><br>
				<p>
					Camping, canoeing and mountain climbing in the Saranac Lake area.
				</p>
				<br>
				<p>
					In Montreal, we will organize an afternoon at <a href='http://hurleysirishpub.com/en_home.html'>Hurley's Irish Pub</a>
				</p>

				<h2>Tobin Family BBQ</h2>
				<h3>Uncle Pat and Tamara's</h3>
				<p>
					Friday, July 31th at 6:00 pm
					<br>
					267 Ch. Covey Hill, Hemmingford, Quebec
				​</p>

				<h2>Evening in Ottawa</h2>
				<h3>TBD</h3>
				<p>
					Saturday, August 1st
					<br>The night before the big day!
				​</p>
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