<html>
<head>


</head>
<body>

@media device-width
@media width

[window.screen.height]
return Math.max(
window.innerHeight, 
document.body.scrollHeight, 
document.body.offsetHeight, 
document.body.clientHeight, 
document.documentElement.scrollHeight, 
document.documentElement.offsetHeight, 
document.documentElement.clientHeight])

@media device-height
@media height

window.orientation
@media orientation
</body>
<script>
window.onload = stats();
window.onresize = stats();

var resize_count = 0;

// Listen for orientation changes
window.addEventListener("orientationchange", function() {
	// Announce the new orientation number
	//stats();
}, false);
// Listen for resize changes
window.addEventListener("resize", function() {
	// Get screen size (inner/outerWidth, inner/outerHeight)
	//alert('resized');
	resize_count++;
	stats();
}, false);
function stats () {
	document.body.innerHTML = 'Window/Screen/Document/Browser Properties';
	document.body.innerHTML += '<p>'+"window.orientation: "+window.orientation+'</p>';
	document.body.innerHTML += '<p>'+"resize_count: "+resize_count+'</p>';
	// apparently matchMedia is undefined on the Blackberry Torch 9810
	<!-- @media queries done 'programmatically' using window.matchMedia() -->
	if (window.matchMedia !== undefined) {
		if (window.matchMedia('(device-width: 480px)').matches)
			document.body.innerHTML += '<br>'+"device-width: 480px";
		else if (window.matchMedia('(device-width: 600px)').matches)
				document.body.innerHTML += '<br>'+"device-width: 600px";	
		else if (window.matchMedia('(device-width: 800px)').matches)
			document.body.innerHTML += '<br>'+"device-width: 800px";	
		else if (window.matchMedia('(device-width: 1024px)').matches)
			document.body.innerHTML += '<br>'+"device-width: 1024px";
		else if (window.matchMedia('(device-width: 1920px)').matches)
			document.body.innerHTML += '<br>'+"device-width: 1920px";
		else
			document.body.innerHTML += '<br>'+"device-width is not 480, 600, 800 or 1920";
	}
	else
		document.body.innerHTML += '<br>'+'matchMedia() is undefined';
	
	document.body.innerHTML += '<br>'+"window.screen.width: "+window.screen.width;
	// virtual pixel width
	document.body.innerHTML += '<br>'+"window.innerWidth: "+window.innerWidth;
	// real pixel width
	document.body.innerHTML += '<br>'+"window.outerWidth: "+window.outerWidth;
	document.body.innerHTML += '<br>'+"document.body.scrollWidth: "+document.body.scrollWidth;
	document.body.innerHTML += '<br>'+"document.body.offsetWidth: "+document.body.offsetWidth;
	document.body.innerHTML += '<br>'+"document.body.clientWidth: "+document.body.clientWidth;
	document.body.innerHTML += '<br>'+"document.documentElement.scrollWidth: "+document.documentElement.scrollWidth;
	document.body.innerHTML += '<br>'+"document.documentElement.offsetWidth: "+document.documentElement.offsetWidth;
	document.body.innerHTML += '<br>'+"document.documentElement.clientWidth: "+document.documentElement.clientWidth;
	document.body.innerHTML += '<br>'+"window.getComputedStyle(document.body, null).width: "+window.getComputedStyle(document.body, null).width;

	
	document.body.innerHTML += '<p>'
	+ "window.screen.height: "+window.screen.height
	+ '<br>'+"window.innerHeight: "+window.innerHeight
	+ '<br>'+"document.body.scrollHeight: "+document.body.scrollHeight
	+ '<br>'+"document.body.offsetHeight: "+document.body.offsetHeight
	+ '<br>'+"document.body.clientHeight: "+document.body.clientHeight
	+ '<br>'+"document.documentElement.scrollHeight: "+document.documentElement.scrollHeight
	+ '<br>'+"document.documentElement.offsetHeight: "+document.documentElement.offsetHeight
	+ '<br>'+"document.documentElement.clientHeight: "+document.documentElement.clientHeight
	+ '<br>'+"window.innerHeight: "+window.innerHeight
	+ '</p>';
	
};

</script>

<!-- User Agent -->
<style>
body {
	width: 980px;
	/*width: 1980px;*/
	margin: 0 auto;
}
</style>
</html>