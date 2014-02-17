<html>

<head>
<style>
	body {
		background: white;
		text-align: center;
		border: 3px solid black;
		background:url('images/Chrysanthemum.jpg');
		/*background-size:80px 60px;*/
		background-repeat:no-repeat;
		padding-top:40px;
	}
	#container {
		background: rgba(60,60,60,.5);
		text-align: left;
		width: 80%;
		height: 100%;
		margin: 0 auto;
		border: 3px solid pink;
		position: relative;
		padding: 20px 20px 0 20px;
	}

	#menu, #content {
		padding: 20px;
	}

	#menu {
		width: 140px;
		height: 200px;
		float: left;
		background: green;

	}

	#content {
		float: right;
		width: 540px;
		height: 300px;
		background: blue;
		border: 2px solid;
		left: 160px;

	}

	@media screen and (max-width: 920px) {
		#container {
			
		}
		#content {
			
		}
	}

</style>
<link rel="text/stylesheet" src=''+<?php $_SERVER['DOCUMENT_ROOT'].'/css/' ?>+'';
</head>

<body>
<div id='container'>

	
	<div id='content'>
		<div id='b2'>Writing is good for letting things out</div>
		<button onclick="javascript:alert(window.outerWidth);">Page Width</button>
		<button onclick="javascript: pageWidth(this)" id='better_button'>Better Button</button>
	</div>
	
	<div id='menu'>
	hmm
		<ul>
			<li>Something</li>
			<li>Something else</li>
			<li>a third thing</li>
			<li>Whatever</li>
			<li>enough</li>
		</ul>
	<?php 
		echo $_SERVER['DOCUMENT_ROOT'].'/css/';
	?>
	<br>
	<?php
		$filePath = __FILE__;
		$filePath = str_replace("\\", '/', $filePath);
		echo str_replace($_SERVER['DOCUMENT_ROOT'], "", $filePath);

	?>
	<br>
	<?php
		echo __FILE__;
	 ?>
	</div>
</div>
</body>
</html>

<script>

window.onload = {};
var ele;

function pageWidth(e) {
	ele = e;
	var width = window.innerWidth;
	var newDiv = document.createElement('div');
	newDiv.id = 'b_width';
	if(document.getElementById('b_width'))
		document.getElementById('b_width').innerHTML = 'Width: '+width;
	else
	{
		e.parentNode.appendChild(newDiv).innerHTML = 'Width: '+ width;
	}

}

</script>

<style>

/* replace body with desired element */
body
{
	animation: moving_background 30s;
	-webkit-animation: moving_background 30s;
	-moz-animation: moving_background 30s;
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	-webkit-animation-direction: alternate;
	animation-timing-function: linear;
	-webkit- animation-timing-function: linear;
}

@-webkit-keyframes moving_background
{
	from 
	{
		background-size: 100% 100%;
	}
	to 
	{
		background-size: 150% 150%;
	}
}

@keyframes moving_background
{
	from 
	{
		background-size: 100% 100%;
	}
	to 
	{
		background-size: 150% 150%;
	}
}

@-moz-animation moving_background
{
	from 
	{
		background-size: 100% 100%;
	}
	to 
	{
		background-size: 150% 150%;
	}
}

</style>