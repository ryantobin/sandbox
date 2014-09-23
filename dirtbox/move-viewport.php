<html>

<script type='text/javascript' src='../js/jquery-1.8.2.js'></script>

<style>
	#container {
		background-image: url('../images/Albert_Bierstadt_BIA030.jpg');
		background-size: cover;
		height: 200%;
		width: 200%;
	}

	#box {
		background-color: blue;
		height: 80px;
		width: 80px;
		position: absolute;
	}

	.navigator table {
		position: fixed;
		top: 60px;
		right: 10%;
		background-color: white;
		border-radius: 100%;
		border: solid 3px black;
		font-size: 18px;
	}
	.clickable {
		cursor: pointer;
	}
</style>

<script> 
	// click to move 'box'
	function moveViewport(direction) {
		var box = document.getElementById('box');
		switch (direction) {
			case "left":
				// window.scrollLeft();
				$(window).scrollLeft();
				break;
			case "right":
				window.scrollRight();
				break;
			case "up":
				window.scrollUp();
				break;
			case "down":
				window.scrollDown();
				break;
		}
	}
///TODO: on click of arrows, change arrow color, or do some sort of highlighting/notification
	function clickDirection(direction) {
		//TODO: highlight arrow on click
		// moveViewport(direction);
		$(window).animate({
			duration: 500
		},500, moveViewport(direction));
	}
	// this may be overriding a jQuery function
	window.scrollUp = function () {
		window.scrollBy(0,-100);
	};

	window.scrollDown = function () {
		window.scrollBy(0,100);
	};

	// window.scrollLeft = function () {
	// 	window.scrollBy(-100,0);
	// };

	window.scrollRight = function () {
		window.scrollBy(100,0);
	};
</script>

<body>
	<div id='container'>

<div style="top: 20px; right: 20px; position: absolute; color: white;">Click the arrows to move the box</div>

<div class='navigator'>
	<!-- ///TODO:  Remake navigator architecture -->
	<table>
		<tr>
			<td></td>
			<td onclick="clickDirection('up')" class='clickable arrow'>&#9650;</td>
			<td></td>
		</tr>
		<tr>
			<td onclick="clickDirection('left')" class='clickable arrow'>&#9668;</td>
			<td></td>
			<td onclick="clickDirection('right')" class='clickable arrow'>&#9658;</td>
		</tr>
		<tr>
			<td></td>
			<td onclick="clickDirection('down')" class='clickable arrow'>&#9660;</td>
			<td></td>
		</tr>
	</table>
</div> <!-- end navigator -->

</div>
</body>
</html>