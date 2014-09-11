<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Tobin.TV</title>
<style type="text/css">
	html, body {
	   text-align: center;
	   font-family: Arial, Helvetica, sans-serif;
	}
	#wrapper {
	   width: 700px;
	   margin: 0 auto 0 auto;
	   text-align: left;
	   padding: 10px;
	   position: relative;
	   top: 80px;
	}
	#logo {
		position: relative;
		margin: 0 auto;
		height: 140px;
		width: 380px;
	}
	.center { text-align: center; }

</style>

<script>

</script>
</head>

<body>
	<div id="wrapper">
		<div id="logo">
			<a href="http://www.tobin.tv"><img src="images/tobindottv.png"></a>
		</div>
		<p class="center">
			<a href="http://66.212.238.243/proxy/">Canadian Proxy</a>
		</p>  
		<?php
			include 'users.php';

			if (is_admin($_session_user_id) === true) {
				echo "Admin!";
			}
		?>
	</div>
</body>
</html>