
<!-- Template Page -->

<html>
<head>
<!-- Website browser heading -->
<title>
	
</title>
<!-- Styles -->
<style>
	body {
		background-color: black;
		color: orange;
		display: block;
		transition: width 2s;
		-moz-transition: width 2s;
		-webkit-transition: width 2s;
	}
	#counter {
		color:red;
		visibility: hidden;
	}
	#foo {
		color: green;
	}
</style>
<!-- jQuery -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Scripts -->
<script>
	var startX, startY;	
	var started = false;
	var lastX, lastY;
	
	$(document).ready(function() {
	
// hidden initialize
	//document.getElementById('foo').style = "visibility = hidden";
// check for movement

// display areas

// start timer

//refresh on movement

//limit hit

// fade elements out
	

	});

	$(document).mousemove(function(event) {
/*
    if (startX == -1) {
        return;
    }
    if (startY == -1) {
        return;   
    }

		totalMovement += Math.sqrt(Math.pow(lastY - event.clientY, 2) + Math.pow(lastX - event.clientX, 2));

		$('span').text('From your starting point (' + startX + 'x' + startY + ') you moved:   ' + totalMovement);

		lastX = event.clientX;
		lastY = event.clientY;
*/	
		
		if (!started) {
			startX = event.clientX;
			startY = event.clientY;
			document.getElementById('startloc').innerHTML = "Starting Mouse Location x/y: " + startX + "/" + startY;
			started = true;
		}

		document.getElementById('foo').innerHTML = "Current Mouse Location x/y: " + event.clientX + "/" + event.clientY;
		if(Math.sqrt(Math.pow(startX - event.clientX, 2) + Math.pow(startY - event.clientY, 2)) > 20)
			//document.getElementById('counter').style.visibility = "visible";
			if (document.getElementById('counter').style.visibility != 'visible')
				fadeIn('counter');
	
	});
	
	function timeToFade() {
		document.body.style.display = "block";		
	}
	
	function fadeIn(elem) {	
	    var op = 0.05;  // initial opacity
	    var obj = document.getElementById(elem);
		obj.style.visibility = 'visible';
			var timer = window.setInterval(function () {
	        if (op >= 0.9){
	            clearInterval(timer);
							
//	            obj.style.display = 'block';
				
	        }
          obj.style.opacity = op;
  	      obj.style.filter = 'alpha(opacity=' + op * 100 + ")";
	        op += 0.01;
	    }, 50);
		
	}
	
	function fade(elem) {
	    var op = 1;  // initial opacity
	    var obj = document.getElementById(elem);
			var timer = window.setInterval(function () {
	        if (op <= 0.1){
	            clearInterval(timer);
							
//	            obj.style.display = 'none';
				obj.style.visibility = 'hidden';
	        }
          obj.style.opacity = op;
  	      obj.style.filter = 'alpha(opacity=' + op * 100 + ")";
	        op -= op * 0.1;
	    }, 50);
	}	
	function movementDetected() {
		theDiv = document.getElementById('counter').style.display;
		//alert("inside movementDetected");
//		document.body.style.display="none";

		if (theDiv == "" || theDiv == 'block') {
			fade('counter');
		}
		
		else {
		alert(document.getElementById('counter').style.display);
			if(document.getElementById('counter').style.display == 'none') {
				document.getElementById('counter').style = 'display = block';
			}
		}

		var detected;
	}


</script>

</head><!-- end header -->

<!-- BODY -->
<body>
<button onclick="movementDetected()"> Click </button>
to make red text fade / reappear
	<div id="counter" style="display='block'">
	>>> RED TEXT <<<
	</div>
	<div id='startloc'> Unknown </div>
	<div id="foo"> THIS IS A FOO </div>
</body> <!-- end body -->
</html> <!-- end html -->
