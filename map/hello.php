<html>

<head>
<title>Argyle Labs - Map your world</title>
<style type="text/css">
	html, body, #map-canvas {
	   text-align: center;
	   font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        height: 100%;
      }

	#wrapper {
	   width: 100%;
	   margin: 0 auto 0 auto;
	   text-align: left;
	   padding: 10px;
	   position: relative;
	   top: 0px;
	   background: grey;
	}
	#circle {
		width: 50px;
		height: 50px;
		-webkit-border-radius: 25px;
		-moz-border-radius: 25px;
		border-radius: 25px; 
		background: green;
		position: relative;
		margin: 0 auto;
		float: left;
	}
	#logo {
		position: relative;

		height: 50px;
		width: 280px;
		background: red;
	}
	#titletext {
		position: relative;
		top: 15px;
	}
	.center { text-align: center; }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(43.656214,-79.391897),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<script>

</script>
</head>

<body>
	<div id="wrapper">
		
		<div id="logo">
			<div id="circle"><img src="http://www.argylelabs.ca/argylepattern.jpeg" height="25" width="25" top=15px left=15px></div> 
			<div id="titletext">&nbsp Argyle Labs Map Project</div>
		</div>
		  
	</div>
	<div id="map-canvas">
			<!-- Map API - insert here-->
			This will be a map div
		</div>
</body>

</html>