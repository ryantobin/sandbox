<?php

// words in a box

?>
<!DOCType html>

<html>
<head>
	<title>Words in a box</title>
</head>
<style>

html, body {
	background-color: lightblue;
	margin: 0;
	padding: 0;
	width: 100%;
}


.hidden {
	display: none;
}
.option {
	display: none;
}


</style>
<body>
	<div class='top-title'>
		<h2>Words in a Box</h2><span>Behavior: words represent categories that can be selected to add to the page to fill out/complete use options</span>
	</div>

	<div class='wrapper'>
		<div class='selected-area'>

		</div>
		<div class='select-words'>
			<div>
				Brief Biography <span class='option'>Edit</span>
			</div>
			<div>
				Interests <span class='option'>Add</span>
			</div>
			<div>
				Questions <span class='option'>Ask</span>
			</div>
			<div>
				Answers <span class='option'>Ask</span>
			</div>
			<div>
				Current Positions  <span class='option'>Add</span>
			</div>
			<div>
				Qualifications  <span class='option'>Add</span>
			</div>
			<div>
				Work Description <span class='option'>Edit</span>
			</div>
			<div>
				Team Members <span class='option'>Add</span>
			</div>
			<div>
				Locations of Business, Research or Pleasure <span class='hidden'>Used to match you with activities, people and opportunities close by</span> <span class='option'>Add</span>
			</div>
			<div>
				Achievements <span class='option'> <span class='option'>Add</span></span>
			</div>
		</div>
	</div>
</body>

</html>