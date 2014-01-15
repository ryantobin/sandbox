<!-- code written by Ryan Tobin . start Nov 27 2012 -->

<!-- includes -->
<?php include "header.php"; ?>

<!-- background image / setting choices -->

<!-- different backgrounds -->

<style>

#bg1 {
/* by class */
}
#bg2{

}
#bg3{

}

#bgimage {

}
#bggradient {

}
#bgradial {

}
#bgfixed {

}

/* buttons */
.buttonb {
	display: block;
	height:100px;
	line-height: 100px;
	text-align: center;
	width:100px;
	background:brown;
	padding: 5px;
	margin: 5px;
	border: black 3px solid;
	float: left;
	border-radius: 14px;
	box-shadow: 10px 10px 40px black;
	cursor: hand;
	cursor: pointer;
}

/* the background */
#thebg {
	min-height: 100%;
	min-width: 100%;
	position: absolute;
	margin: 0 auto;
	background: grey;
}

</style>



<script>
	function setbg (num) {		
		switch(num) {
			case 1:
				document.getElementById("thebg").style.background = "yellow";				
				break;
			case 2:
				document.getElementById("thebg").style.background = "green";
				break;
			case 3:
				document.getElementById("thebg").style.background = "red";
				break;
			default:
				document.getElementById("thebg").style.background = num;
				break;
		}
	}
</script>

<div id='thebg'>
<button onclick='setbg(1);' id=' ' name=' ' class='button'>Yellow</button>
<button onclick='setbg(2);' id=' ' name=' ' class='button'>Green</button>
<button onclick='setbg(3);' id=' ' name=' ' class='button'>Red</button>
<div>
	<div onclick='setbg(1)' id='b1' name='yellow' class='buttonb'></div>
	<div onclick='setbg(2)' id='b2' name='green' class='buttonb'></div>
	<div onclick='setbg(3)' id='b3' name='red' class='buttonb'></div>
	<div onclick='setbg(getAttribute("name"));' id='b4' name='blue' class='buttonb'></div>
	<div onclick='setbg(getAttribute("name"));' id='b5' name='purple' class='buttonb'></div>
</div>

<script>
	// Setup for buttons
	setNameAndColor("b1");
	setNameAndColor("b2");
	setNameAndColor("b3");
	setNameAndColor("b4");
	setNameAndColor("b5");
	// function that sets the background and value of the divs to their name attribute
	function setNameAndColor (num) {
//		this.style.cursor = crosshair;
		b = document.getElementById(num)
		b.innerHTML = b.style.background = b.getAttribute('name');
	
	
	}
</script>

</div>