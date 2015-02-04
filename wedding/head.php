<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<link href="wedding.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Kristen and Ryan's Wedding Site</title>
	<?php
		// Load local jQuery libary if it exists, otherwise, get Google Hosted file
		function js_link($src)
		{
		    if(file_exists($src))
		    {
		    	//we know it will exists within the HTTP Context
		        return sprintf("<script type=\"text/javascript\" src=\"%s\"></script>",$src);
		    }
		    else {
		    	$src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js';
		    	return sprintf("<script type=\"text/javascript\" src=\"%s\"></script>",$src);
		    }
		    echo "<script>console.log('Unable to load jQuery library');</script>";
		}

		// add jQuery from local if it exists or web

		echo js_link("../js/jquery-1.11.2.min.js");
	?>
</head>