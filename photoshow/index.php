<?php
/* 
 * index.php
 *
 */
?>
<html>
<head>
  <title>Photoshow</title>
  <link type='text/css' rel='stylesheet' href='photoshow.css'>
  <script src='../js/jquery-1.8.2.js'/>
</head>
<script>
</script>

<body>

<?php
// GET INITIAL IMAGES FROM FOLDER AND CREATE IMAGES FOR THEM
// DEFINE FOLDER NAME HERE - your photo folder in the website directory
$picturesFolderName = "../../images/Pats";
$picturesFolderName = "pics";
$picturesFolderName = "";

// displays images in individual image tags
include 'display_pics.php';

?>

	<div id='stella_container'>
		<img src="pics/kitten_stella.jpg" onclick='moveRight(this)'>
	</div>
</body>

<script>

// click image to slide right
function moveRight(elem) {
	// alert('click, triggered moveRight'+elem.toString());
	elem.setAttribute('src','pics/kitten_stella_IMG_6455.jpg');
	elem.setAttribute('width','100%');
}

</script>
<?php
///TODO: Be able to make changes to a page and save them to a counter somewhere
//		Be able to count the number of upvotes (click/javascript/change display/send server info)
//		Backend database on server (SQL on webserver?)
//		Function (AJAX) to send
?>
</html>