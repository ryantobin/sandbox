<?php
// index.php

?>
<!DOCType html>
<htmL>
<head>
	<title>
		HoverMenu
	</title>
	<style>
	.top {
		text-align: left;
		margin: 12px 32px;
		font-size: 16pt;
	}
	.top h2 {
		display: inline-block;
	}
	.wrapper {
		margin: 0 auto;
		overflow: hidden;
	}
	.menu {
		/*width: 200px;*/
		box-shadow: 0 0 3px black;
		position: absolute;
	}
	ul {
		padding: 0 24px;
	}
	li {
		font-size: 18pt;
		font-family: Courier;
		-webkit-transition: font 0.5s;
		-moz-transition: font 0.5s;
		transition: font 0.5s;
		display: block;
	}
	li:hover {
		font-size: 24pt;
		background-color: lightgray;
		cursor: pointer;
	}
	li.selected {
		color: blue;
	}

	</style>
</head>

<body>
	<div class='top'>
		<h2>Hover Menu</h2>
		<span>You should be able to see, an item selected, larger than the rest, then be able to mouse over, up and down the list to make set items grow and easier to click</span>
	</div>
	<div class='wrapper'>
		<div class='menu'>
			<ul>
				<li>Item AAAAAAAAAA</li>
				<li>Item BBBBBBBBBB</li>
				<li>Item CCCCCCCCCC</li>
				<li>Item DDDDDDDDDD selected</li>
				<li>Item EEEEEEEEEE</li>
				<li>Item FFFFFFFFFF</li>
				<li>Item GGGGGGGGGG</li>
			</ul>
		</div>
	</div>
</body>

<script>

// onclick of and li, remove class 'selected' from others and add it to the item clicked
var menu = document.getElementsByClassName('menu')[0];
console.log(menu);
var ulist = menu.getElementsByTagName('ul')[0];
console.log(ulist);
var listItems = ulist.getElementsByTagName('li');
console.log(listItems);


for(var i = 0; i < listItems.length; i++) {
	listItems[i].addEventListener('click', function(event) {
		toggleSelected(event.target);
		//console.log(event.target.innerHTML);
	});
}
//listItems.forEach(addClickListener(this));

function addClickListener(element) {
	// element.addEventListener('click', toggleSelected(element));
	
}

function toggleSelected(e) {
	var elementClasses = e.className;
	if(elementClasses.indexOf('selected') >= 0) {
		elementClasses = elementClasses.replace('selected', '');
		e.innerHTML = e.innerHTML.replace(' selected', '');
		e.className = elementClasses;
		e.style['font-size'] = '';
		return true;
	}
	else {
		e.innerHTML += ' selected';
		e.className += 'selected';
		// e.style['font-size'] = '32pt';
	}
}
</script>

</html>