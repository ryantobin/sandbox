<head>
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<style>
		html,body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
		}
		#map {
			background-image: url("imgs/sample-map.png");
			background-size: 100%;
			background-repeat: no-repeat;
/*			height: 200%;*/
			width: 200%;
			background-position: top center;
		}
		#minimap {
			background-image: url("imgs/sample-map.png");
			background-size: 100%;
			background-repeat: no-repeat;
			width: 221px;
			height: 146px;
			background-position: top center;
			position: fixed;
			bottom: 32px;
			right: 32px;
			border: white 2px solid;
		}
		#minimap-viewport {
			border: 1px solid gray;
			opacity: .5;
			background: black;
			position: relative;
		}
	</style>
</head>

<body>

<div id='map'>

</div>

<div id='minimap'>
	<div id='minimap-viewport'></div>
</div>
<div id='tests'>

<script>
	<?php
		$mapImage = imageCreateFromPng('imgs/sample-map.png');
	?>
</script>
</div>
</body>

<script>

var naturalWidth = <?php echo imagesx($mapImage); ?>;
var naturalHeight = <?php echo imagesy($mapImage); ?>;

// mousetracker relative to div #minimap
var minimapMousePos = {};
$(document).mousemove(function(e){
    var div = $("#minimap");
    minimapMousePos = {
        left: e.pageX - div.offset().left,
        top: e.pageY - div.offset().top
    };
});

window.onload = function() 
{
	// initialize Height 
	$('#map').height(naturalHeight*parseInt($('#map').css('width'))/naturalWidth);
	$('#map').height(naturalHeight*parseInt($('#map').css('width'))/naturalWidth);
	// draw rectangle of current viewport area on minimap
	initializeViewport();	
}
$(document).ready(function() {
	// $('#map').height(naturalHeight*parseInt($('#map').css('width'))/naturalWidth);	
});

function initializeViewport ()
{
	$('#minimap-viewport').width($('#minimap-viewport').width() * ($(window).width()/parseInt($('#map').css('width'))));
	$('#minimap-viewport').height($('#minimap').height() * ($(window).height()/parseInt($('#map').css('height'))));
}
// EVENT LISTENERS
// eventListener for click on minimap - to center map at that relative location
// document.getElementById('minimap').onclick = function() 
// { 
// 	clickMinimap(); 
// };
// object.addEventListener("mousedown", myScript);
// document.getElementById('minimap').addEventListener("click", clickMinimap);
document.getElementById('minimap').addEventListener("mousedown", redrawMinimapViewport);
document.getElementById('minimap').addEventListener("mousedown", function () 
{
	window.setInterval(clickMinimap, 163);
	// redrawMinimapViewport 
});
document.getElementById('minimap').addEventListener("mouseup", function() 
{
	window.clearInterval(clickMinimap);
	console.log('mouseup'); 
	//document.getElementById('minimap').removeEventListener("mouseup", myFunction); 
});

function redrawMinimapViewport () 
{
	// var windowWidth = window.width;
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var mapWidth = windowWidth*2;
	var minimapWidth = $('#minimap').width();
	var minimapHeight = $('#minimap').height();
	// var windowHeight = window.height;
	var mapHeight = windowHeight*2;
	console.log('w: '+windowWidth+' h: '+windowHeight+' mh: '+mapHeight+' mw: '+mapWidth);
	console.log('naturalWidth '+naturalWidth);
	console.log('naturalHeight '+naturalHeight);
	console.log('new Height' + naturalHeight*parseInt($('#map').css('width'))/naturalWidth);
	
// Calculate left for minimap-viewport
	
	if(minimapMousePos.left/minimapWidth > 0 && minimapMousePos.left/minimapWidth < .25) 
	{
		document.getElementById('minimap-viewport').style.left = 0;
		window.scrollTo(0, $(document).scrollTop());
		// console.log(document.getElementById('minimap-viewport').style.left);
		// console.log('Case 1 '+minimapMousePos.left/minimapWidth);
	}
	else if(minimapMousePos.left/minimapWidth > 1/4 && minimapMousePos.left/minimapWidth < 3/4) 
	{
		document.getElementById('minimap-viewport').style.left = minimapMousePos.left - $('#minimap-viewport').width()/2;
		window.scrollTo(mapWidth*minimapMousePos.left/minimapWidth - $('#minimap-viewport').width()/2, $(document).scrollTop());
		// console.log('Case 2 '+document.getElementById('minimap-viewport').style.left);
	}
	else 
	{
		document.getElementById('minimap-viewport').style.left = $('#minimap').width()/2;
		window.scrollTo(mapWidth/2,$(document).scrollTop());
		// console.log('Case 3 '+document.getElementById('minimap-viewport').style.left);
	}	
// Calculate top for minimap-viewport
	
	if(minimapMousePos.top/minimapHeight > 0 && minimapMousePos.top/minimapHeight < .25) 
	{
		document.getElementById('minimap-viewport').style.top = 0;
		window.scrollTo($(document).scrollLeft(), 0);
		
		// console.log(document.getElementById('minimap-viewport').style.top);
		// console.log('Case 1 '+minimapMousePos.top/minimapWidth);
	}
	else if(minimapMousePos.top/minimapHeight > 1/4 && minimapMousePos.top/minimapHeight < 3/4) 
	{
		document.getElementById('minimap-viewport').style.top = minimapMousePos.top - $('#minimap-viewport').height()/2;
		window.scrollTo($(document).scrollLeft(), mapHeight*minimapMousePos.top/$('#minimap').height() - $('#minimap-viewport').height()/2);
		// console.log('Case 2 '+document.getElementById('minimap-viewport').style.top);
	}
	else 
	{
		document.getElementById('minimap-viewport').style.top = $('#minimap').height()/2;
		window.scrollTo($(document).scrollLeft(),mapHeight/2);
		// console.log('Case 3 '+document.getElementById('minimap-viewport').style.top);
	}

	// document.getElementById('minimap-viewport').style.left = minimapMousePos.left;
	// document.getElementById('minimap-viewport').style.top = minimapMousePos.top;
	// $('#map').height(naturalHeight*parseInt($('#map').css('width'))/naturalWidth);
}

function clickMinimap () {
//$(#minimap);
	console.log('clicked - minimap');
	console.log('clientHeight '+document.body.clientHeight);
	console.log('window.outerHeight '+window.outerHeight);
	console.log('$(window).height() '+$(window).height());
	console.log('$("html").height()) '+$("html").height());
	console.log($('#minimap-viewport').width());
	console.log($('#minimap-viewport').height());
	console.log($('#map').css('width'));
	console.log($('#map').css('height'));
	//$('#minimap-viewport').width = $('#minimap-viewport').width() / (100/ parseInt($('#map').width()));
	console.log($('#minimap-viewport').width() * ($(window).width()/parseInt($('#map').css('width'))));
	console.log($('#minimap-viewport').height() * ($(window).height()/parseInt($('#map').css('height'))));
	console.log('minimapMousePos.left '+minimapMousePos.left);
	console.log('minimapMousePos.top '+minimapMousePos.top);

	redrawMinimapViewport();
}

// create a ping at the location on the minimap you clicked


</script>