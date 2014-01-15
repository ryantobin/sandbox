<html>
<head>

<script type="text/javascript" src="../assets/js/jquery-1.10.2.min.js"></script>

</head>

<body>

<div id='thetable'></div>

<div id='the-toolbar'>
	<div id='stats'>
		<div id='mousepos'></div>
		<div id='clickedpos'></div>
		<div id='overdiv'></div>
	</div>
	<div id='colorpicker'>
		<div id='color-yellow'> </div>
		<div id='color-orange'> </div>
		<div id='color-purple'> </div>
	</div>
</div>

</body>

<style>

html, body, #thetable {
	width: 100%;	
	height: 100%;
	padding: 0;
	margin: 0;
	position: relative;
}
p {
	color: #EEEEEE;
}
#thetable {
	background: url('greenfelt.jpg');	
}
#the-toolbar {
	background-color: rgba(10,10,10, .5);
	position: absolute;
	bottom: 0;
	height: 150px;
	width: 100%;
	border-top: 
}
.box {
	height: 100px;
	width: 100px;
	position: absolute;
	box-shadow: 5px 5px 5px black;
	border-top: 1px solid rgba(0,0,0,0.5);
	border-left: 1px solid rgba(0,0,0,0.5);
	
}
#stats {
	height: 150px;
	width: 200px;
	float: left;

}
#colorpicker {
	position: relative;
	left: 200px;
	height: 150px;
}
#colorpicker div {
	margin: 10px 20px;
}
#color-yellow {
	float: left;
	width: 100px;
	height: 100px;
	background: #FAE888;
}
#color-orange {
	float: left;
	width: 100px;
	height: 100px;
	background: #F5AE33;
}
#color-purple {
	float: left;
	width: 100px;
	height: 100px;
	background: #D496CA;
}

</style>

<script>

// Global Variables
var mousePosX;
var mousePosY;
var currentColor = '#FAE888';

var isIE = document.all ? true : false;

$(document).ready(function() {
  //clickListener();
});

function worktable () {
	this.height = 0;
	this.width = 0;
	this.posts = new Array();
}

function newWorktable (height, width, posts) {
	new worktable(height, width, posts);
}


function post (color, xcord, ycord, content) {
	this.color = color;
	this.xcord = xcord;
	this.content = content;
	
}

function editTextBox () {
	
}

function checkMouseDiv () {
	var mouseOverDiv = document.elementFromPoint(mousePosX,mousePosY);
	//c = document.getElementsByClassName(c.className)[0];
	
	// extra insight into behavior that can be removed later
	var c = mouseOverDiv.id;
	var classC = mouseOverDiv.className;
	if(c == "")
		c = 'no id';
	$(overdiv).html("<p>Over Div:"+c+"</p><p>Over Class: "+classC+"</p>");
	
	return mouseOverDiv;
}

// Place Box
function placeBox (){	
	$(thetable).append("<div class='box' style='top: "+mousePosY+"px; left: "+mousePosX+"px; background:"+currentColor+"'> </div>");	
}

// WHEN THE MOUSE IS CLICKED - CALL getMousePositionOnClick
// Get Mouse Position On Click
document.onclick = behaviorOnMouseClick;

function behaviorOnMouseClick () {
	displayMousePositionOnClick();
	var divClicked = checkMouseDiv();
	
	//alert("divClicked.id "+divClicked.id);
	// if over a box edit text
	if(divClicked.className == 'box') {
		alert('you clicked on a box');
		divClicked.append("this was added by the click");
	}
	// if over color picker change color of new boxes that are added
	if(divClicked.id == 'color-yellow') {
		currentColor = '#FAE888';		
		return;
	}
	if(divClicked.id =='color-orange')  {
		currentColor = '#F5AE33';		
		return;
	}
	if(divClicked.id == 'color-purple') {
		currentColor = '#D496CA';		
		return;
	}
	// if it's non of the above and not a box, place the box
	if(divClicked.className != 'box') {
		var box = placeBox();
	}
	
	
}

function displayMousePositionOnClick () {	
	$(clickedpos).html("<p>Position: "+mousePosX+","+mousePosY+"</p>");	
}

// Get Mouse Position

document.onmousemove = getMousePosition;
function getMousePosition(ev) {
	var _x;
	var _y;
	if (!isIE) {
		_x = ev.pageX;
		_y = ev.pageY;
	}
	if (isIE) {
		_x = ev.clientX + document.body.scrollLeft;
		_y = ev.clientY + document.body.scrollTop;
	}
	mousePosX = posX = _x;
	mousePosY = posY = _y;		
	
    var  pos=Array(posX,posY);
	
	$(mousepos).html("<p>x: "+posX+" y: "+posY);
	
	return pos;
	
	
}

post.prototype.getColor = function ()
{
	alert(this.color);
}

</script>

</html>
