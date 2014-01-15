<html>

<head>
<style>
	body {
		background: grey;
	}
	#test {
		background: yellow;
	}

</style>
</head>
<body>
<script>

	function mousedOver(id) {
		alert("moused ");
		getElementById("writing").html("clicked: "+id);
	};
	        function show(boxNumber)
        {
            var div = document.getElementById(boxNumber);
            div.style.display = 'block';
        }
        function hide(boxNumber)
        {
            var div = document.getElementById(boxNumber);
            div.style.display = 'none';
        }

</script>

<div id="loc-map">

<img src="http://78.24.208.245/wp-content/themes/responsive/images/base_map.png" width="720" height="538" alt="Locations and Networks Map" usemap="#locations">

<map name="locations">
	<area shape="rect" coords="207,72,314,113" href="http://78.24.208.245/locations-networks/isle-of-man/" alt="Isle of Man">
	<area shape="rect" coords="247,13,354,54" href="http://78.24.208.245/locations-networks/london/" alt="London">
	<area shape="rect" coords="373,36,480,75" href="http://78.24.208.245/locations-networks/guernsey/" alt="Guernsey">
	<area shape="rect" coords="472,85,579,124" href="http://78.24.208.245/locations-networks/isle-of-man/" alt="Milan">
	<area shape="rect" coords="594,254,702,294" href="http://78.24.208.245/locations-networks/singapore/" alt="Singapore">
	<area shape="rect" coords="25,283,133,323" href="http://78.24.208.245/locations-networks/montreal/" alt="Montreal">
	<area shape="rect" coords="191,418,299,458" href="http://78.24.208.245/locations-networks/dublin/" alt="Dublin">
	<area shape="rect" coords="219,486,326,525" href="http://78.24.208.245/locations-networks/gibraltar/" alt="Gibraltar">
	<area shape="rect" coords="359,459,466,498" href="http://78.24.208.245/locations-networks/paris/" alt="Paris">
	<area shape="rect" coords="462,401,570,441" href="http://78.24.208.245/locations-networks/malta/" alt="Malta">
</map>

</div>
<div id="writing">
<?php 
	echo "hello world";
	echo $_SERVER['REQUEST_URI'];
	
	// $current_page = ;
	if ($_SERVER['REQUEST_URI'] = "/awards/")
		echo "It does";
		
?>
<div hi="hello">
Cool beans
</div>

</div>

</body>
</html>
