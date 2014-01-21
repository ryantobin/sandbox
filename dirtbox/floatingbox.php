<html>
<head>

<style>
	body {
		background: grey;
		width: 100%;
		height: 100%;
	}
	#boxcontainer {
		position: relative;
		top: 50%;
		left: 50%;
	}
	#floatingbox {
		position: relative;
		top: -50px;
		left: -50px;
		height: 100px;
		width: 100px;
		background: blue;
	}
</style>
<script>
/*
	function dragBox(event) {
		document.getElementById('floatingbox').style.background = 'yellow';
		while(mousedown){
			getElementById('floatingbox').background = 'red';
		}
		getElementById('floatingbox').background = 'green';
	}
*/
	function dragBox(event) {
		document.getElementById('floatingbox').style.left = clientX -50;
		document.getElementById('floatingbox').style.top = clientY -50;
	}
</script>

</head>
<body>
	<div id='boxcontainer'>
		<!-- <div id='floatingbox' onmousedown='dragBox(event)'></div> -->
		<div id='floatingbox' onmousedown='dragBox(event)'></div>
	</div>

</body>
</html>