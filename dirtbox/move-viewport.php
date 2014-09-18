<html>

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
		position: absolute;
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
///TODO: convert to switch statement?
		// switch (direction) {
		// 	case "left":
		// 		break;
		// 	case "right":
		// 		break;
		// 	case "up":
		// 		break;
		// 	case "down":
		// 		break;
		// }
		if(direction == 'left') {
			// var currentPos = document.getElementById('container').scrollLeft;
			document.getElementById('container').scrollLeft = 10;
			// document.body.scrollLeft = 10;

			// currentPos = currentPos ? currentPos : '0px';
			// var currentPosPx = parseInt(currentPos);
			// var newPos = currentPosPx-20;
			// box.style.left = newPos+"px";
		}
		if(direction == 'right') {
			// var currentPos = document.getElementById('container').scrollRight;
			document.getElementById('container').scrollRight = 10;
			// document.body.scrollRight = 10;
			
			// var currentPos = document.getElementById('box').style.left;
			// currentPos = currentPos ? currentPos : '0px';
			// var currentPosPx = parseInt(currentPos);
			// var newPos = currentPosPx+20;
			// box.style.left = newPos+"px";
		}
		if(direction == 'up') {
			var currentPos = document.getElementById('box').style.top;
			currentPos = currentPos ? currentPos : '0px';
			var currentPosPx = parseInt(currentPos);
			var newPos = currentPosPx-20;
			box.style.top = newPos+"px";
		}
		if(direction == 'down') {
			var currentPos = document.getElementById('box').style.top;
			currentPos = currentPos ? currentPos : '0px';
			var currentPosPx = parseInt(currentPos);
			var newPos = currentPosPx+20;
			box.style.top = newPos+"px";
		}
	}
///TODO: on click of arrows, change arrow color, or do some sort of highlighting/notification
	function clickDirection(direction) {
		// highlight arrow

		// moveBox
	}

</script>

<body>
	<div id='container'>

<div style="top: 20px; right: 20px; position: absolute; color: white;">Click the arrows to move the box</div>

<div class='navigator'>
	<!-- ///TODO:  Remake navigator architecture -->
	<table>
		<tr>
			<td></td>
			<td onclick="moveBox('up')" class='clickable arrow'>&#9650;</td>
			<td></td>
		</tr>
		<tr>
			<td onclick="moveBox('left')" class='clickable arrow'>&#9668;</td>
			<td></td>
			<td onclick="moveBox('right')" class='clickable arrow'>&#9658;</td>
		</tr>
		<tr>
			<td></td>
			<td onclick="moveBox('down')" class='clickable arrow'>&#9660;</td>
			<td></td>
		</tr>
	</table>
</div> <!-- end navigator -->

</div>
</body>
</html>