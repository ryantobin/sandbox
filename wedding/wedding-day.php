
<?php include ('head.php'); ?>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    mapCanvas = document.getElementById('map_canvas_belv');
    var belvLatLng =  new google.maps.LatLng(45.6419029,-75.8784485);
    mapOptions = {
      center: belvLatLng,
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    markerOptions = {
    	position: belvLatLng,
    	map: map,
    	title: 'Le Belvedere'
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
				<header>Wedding Day Information</header>
				<h2>Wedding Shuttles</h2>
				<h3>Bus One - From Ottawa/Hull</h3>
				<p>
					<br>3:00 - Laurie's House, 161 Manor Ave., Ottawa
					<br>3:30 - Hilton Lac Leamy, 1 Boul. du Casino, Hull
					<br>4:00 - Arrival at Le Belvedere
				</p>
				<br> 
				<h3>Bus Two - From Wakefield</h3>
				<p>
					<br>
					To Be Determined
<!-- 					Sunday, August 2nd, 2015
					<br>4:20 - Wakefield Inn
					<br>4:30 - Arrival at Le Belvedere -->
				</p>
				<h2 style="padding: 12px 0 0;">The Wedding</h2>
				<h3>Le Belvedere</h3>
				<p>
					Sunday, August 2nd, 2015 at 4:30pm
					<br>40 Ch. Des Sentiers, Wakefield, Quebec
				</p>
			</div>			 
			<div class='maps'>
 				<div class='map_canvas' id="map_canvas_belv"></div>
			</div>
		</div>
	</div>

</body>
<script>
var extraPadding = 28;
var eventInfoBodyHeight = parseInt(window.getComputedStyle(document.getElementById('events-info-body')).height) + extraPadding + 'px';

document.getElementById('events-info-body-bg').style.height = eventInfoBodyHeight;

</script>
</html>