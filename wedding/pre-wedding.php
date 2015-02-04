
<?php include ('head.php'); ?>

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
					Canoeing, camping, and mountain climbing in the Saranac Lake area.
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
				</p>

				<a class='directions' href='https://www.google.ca/maps/dir/467+Avenue+Argyle,+Westmount,+QC+H3Y+3B3/267+Chemin+de+Covey+Hill,+Hemmingford,+QC+J0L+1H0/@45.2528788,-73.8663867,10z/data=!3m1!4b1!4m29!4m28!1m20!1m1!1s0x4cc91a0edb4741d9:0x7bba00e387c3594d!2m2!1d-73.5976226!2d45.4868372!3m4!1m2!1d-73.5986692!2d45.2542784!3s0x4cc9722f2a066d97:0x568bd3d5c855e303!3m4!1m2!1d-73.5325815!2d45.2257602!3s0x4cc976bf5a042ce3:0xd41074d3253030f3!3m4!1m2!1d-73.5651093!2d45.1819815!3s0x4cc9774417c1e2ed:0xb15eb30813d8c3dc!1m5!1m1!1s0x4ccbd58c45616cf1:0x401a66de3977cc72!2m2!1d-73.6459583!2d45.0197533!3e0' target='blank'>
					Directions from Montreal to Hemmingford
				</a>
				<br>
				<a class='directions' href='https://www.google.ca/maps/dir/Carleton+University,+1125+Colonel+By+Drive,+Ottawa,+ON+K1S+5B6/267+Chemin+de+Covey+Hill,+Hemmingford,+QC+J0L+1H0/@45.1661122,-74.3743589,257317m/data=!3m1!1e3!4m19!4m18!1m10!1m1!1s0x4cce05d8d37fecc3:0xbf5d8d7821b8dcdc!2m2!1d-75.69602!2d45.387581!3m4!1m2!1d-74.7657514!2d45.4200517!3s0x4cce917e51612e6b:0xb2c7cefb10e6870d!1m5!1m1!1s0x4ccbd58c45616cf1:0x401a66de3977cc72!2m2!1d-73.6459583!2d45.0197533!3e0'>
					Directions from Ottawa to Hemmingford
				</a>
				<h2>Day Before in Ottawa</h2>
				<h3>To Be Determined</h3>
				<p>
					Saturday, August 1st
				​</p>
			</div>			 
			<div class='maps'>
 				<div class='map_canvas' id="map_canvas_CH"></div>
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

