<!-- scrolling Marquee -->
<!-- /* -webkit-marquee: <direction> <increment> <repetition> <style> <speed>; */ -->
<html>
<head>
<!-- Website browser heading -->
<title>
Test Pages | Scrolling Marquee
</title>

<!-- jQuery -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Scripts -->
<script>
    $(document).ready(function() {

    });
</script>

<!-- Styles -->
<style>
    body {
        background-color: black;
        color: orange;
    }
	
	#marq {
		-webkit-marquee: left medium infinite scroll normal;
		-moz-marquee: left medium infinite scroll normal;
		marquee: left medium infinite scroll normal;
		color: yellow;
	}
</style>

</head><!-- end header -->

<!-- BODY -->
<body>

<div id="marq">
	This should scroll or do something.
</div>

<marquee align="middle" bgcolor='grey' behavior='scroll' direction='left' loop='infinite' width='300px'>
	This is a marquee woo woo wee
</marquee>
<br>
<marquee align="middle" bgcolor='white' behavior='alternate' direction='left' loop='infinite' width='300px'>
	Something else to say?
</marquee>
    
</body> <!-- end body -->
</html> <!-- end html -->
