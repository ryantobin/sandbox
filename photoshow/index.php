<?php
/* 
 * index.php
 *
 */
?>

<?php 
session_start();
include 'engine.php';

$eng = new PhotoshowEngine(); // This is the main engine of the site
?>

<html>
<head>
	<title>Photoshow</title>
	<link type='text/css' rel='stylesheet' href='photoshow.css'>
	<script src='../js/jquery-1.11.2.min.js'/>

	<script>
// $(window).scroll(function() {
//    $(this).scrollTop(0);
// });

	</script>

</head>

<body>

	<?php

		// $eng->getPicturesFrom('pics');
		$eng->getPicturesFrom('../images');

	?>

	<div class='pictureWrapper'>
		<img src="pics/kitten_stella.jpg" onclick='moveRight(this)'>
	</div>

	<?php
		include('testoutputcontrols.php');
	?>

</body>

<script>

// click image to slide right
function moveRight(elem) {
	console.log(elem); // DOM object
	console.log($(this)); // window
	console.log($(elem)); // javascript obj converted to jQuery Obj
	// alert('click, triggered moveRight'+elem.toString());
	//elem.setAttribute('src','pics/kitten_stella_IMG_6455.jpg');
	// elem.setAttribute('width','100%');
	// elem.className.replace(/\bfull-width\b/,'');
	// elem.className += 'full-width';

	console.log(window.screen.width+'px');
	setWidth = window.screen.width+'px';
	$(elem).animate({width: setWidth}, {queue: false, duration: 200, easing: 'swing'});
	elemSrc = elem.src.substr(elem.src.lastIndexOf("/")+1);
	// console.log($('#'+elem.id).css);
}

</script>
<script>

// set image width/height
var imageWrappers = document.getElementsByClassName('image-wrapper');

for (var i = 0; i < imageWrappers.length; i++) {
	var image = imageWrappers[i].getElementsByTagName('img')[0];
	// if image height > image-wrapper height
	// make image height equal to image-wrapper height
	// center image horizontal

	// if image width > image-wrapper
	console.log(image);
}


</script>
<script>
	//DISABLE MOUSE WHEEL SCROLLING
    $(document).ready(function() {
        $("body").bind("mousewheel", function() {
            if ($.browser.webkit === true) {
                return false;
            }
        });
    });
</script>

<?php
///TODO: Be able to make changes to a page and save them to a counter somewhere
//		Be able to count the number of upvotes (click/javascript/change display/send server info)
//		Backend database on server (SQL on webserver?)
//		Function (AJAX) to send
?>
</html>