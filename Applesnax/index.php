<?php
// Brendan's Leetzor Game Station of Doom and other nasty stuff




?>
<head>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
</head>
<style>
	html {
		font-family: arial;	
	}
	body {
		background: url(Chrysanthemum.jpg) no-repeat 0 0;
		height: 100%;
		background-size: cover;
	}
	#title-bar {
		text-align: center;
		font-size: 2em;
		background: white;
		color: orange;
		height: 2em;
		line-height: 2em;
		width: 100%;
		border-radius: 0 0 8px 8px;
		-moz-border-radius: 0 0 8px 8px;
		-webkit-border-radius: 0 0 8px 8px;
	}
	#video-container {
		/* background: black; */
		border: 5px solid black;
		width: 640px;
		height: 360px;
		position: relative;
		margin: auto;
		top: 40px;
		background: black; /* Old Browsers */
		background: -moz-linear-gradient(top, #000000 50%, firebrick 100%); /* FF3.6+ */
		background-image: linear-gradient(top, #000000 50%, #B22222 100%);
		background-image: -o-linear-gradient(top, #000000 50%, #B22222 100%);
		background-image: -moz-linear-gradient(top, #000000 50%, #B22222 100%);
		background-image: -webkit-linear-gradient(top, #000000 50%, #B22222 100%);
		background-image: -ms-linear-gradient(top, #000000 50%, #B22222 100%);
	}
	#main-video {

	}
	#twitter-feed-container {
		right: 0;
		top: 174px;
		width: 280px;
		height: 400px;
		position: fixed;			
	}	
	#twitter-feed-background {
		background: white;
		opacity: .5;
		position: absolute;
		height: 100%;
		width: 100%;
		border-radius: 8px 0px 0px 8px;
		-moz-border-radius: 8px 0 0px 8px;
		-webkit-border-radius: 8px;

	}
	#twitter-feed {
		position: relative;
		transition: 3;
		opacity: 1.0;
		transition: top 2s;
		-moz-transition: top 2s;
		-webkit-transition: top 2s;
		padding: 10px;
	}
</style>
<script>

    $(function() {
        $( "#gangnam" ).resizable();
    });

</script>
<body>
	<div id='title-bar'>
		<strong>Welcome to the Station</strong>
	</div>
	<div id='video-container'>
		<video id='main-video'> 

			
		</video>
					<object width="640" height="360">
				<param name="movie" value="http://www.youtube.com/v/9bZkp7q19f0?version=3&amp;hl=en_US&amp;rel=0"></param>
				<param name="allowFullScreen" value="true"></param>
				<param name="allowscriptaccess" value="always"></param>
				<embed id="gangnam" src="http://www.youtube.com/v/9bZkp7q19f0?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="640" height="360" allowscriptaccess="always" allowfullscreen="true">
				</embed>
			</object>
	</div>
	<div id="twitter-feed-container">
		<div id='twitter-feed-background'>
		
		</div>
		<div id='twitter-feed'>
			Look who's talking
		</div>
	</div>
			<object width="1280" height="720">
				<param name="movie" value="http://www.youtube.com/v/9bZkp7q19f0?version=3&amp;hl=en_US&amp;rel=0"></param>
				<param name="allowFullScreen" value="true"></param>
				<param name="allowscriptaccess" value="always"></param>
				<embed id="gangnam" src="http://www.youtube.com/v/9bZkp7q19f0?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="1280" height="720" allowscriptaccess="always" allowfullscreen="true">
				</embed>
			</object>

</body>