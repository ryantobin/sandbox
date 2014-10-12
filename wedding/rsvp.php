<!DOCTYPE html>
<html>

<head>
	<link href="wedding.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id='content'>
		<div id='top-banner'>
			<span> August 2, 2015</span>
			<span class='names'>Kristen &amp; Ryan</span>
			<span> Wakefield, QC</span>
		</div>
		<nav id='main-menu'>
			<a href='index.php'><span>Home</span></a>
			<a href='our-story.php'><span>Our Story</span></a>
			<a href='events-info.php'><span>Events &amp; Day-Of Info</span></a>
			<a href='accommodation.php'><span>Accommodation</span></a>
			<a href='rsvp.php' class='current-page'><span>RSVP</span></a>
		</nav>
		<div id='our-story-body-bg'></div>
		<div id='our-story-body'>			
			<div id='osimg'></div>
			<div class='text'>
				<header id='rsvp-header'>Please RSVP by Christmas, 2014</header>
			</div>			
				<p>
					Please indicate which of your invited party can come and who, unfortunately, cannot.
				</p>
				<p>
					We can't wait to celebrate with you!
				</p>
				<div id='form-box'>
					<?php include 'contact-form.php' ?>
				</div>
			</div>
		</div>

		<div id='bottom-menu'></div>
	</div>
	<div id='footer'></div>
</body>
</html>