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

<?php

// DEFINE FOLDER NAME HERE - your photo folder in the website directory
$picturesFolderName = "pics";
$picturesFolderName = "../../images/Pats";
// $picturesPath = "../".$picturesFolderName;
$picturesPath = $picturesFolderName;
//echo $picturesPath;
$listOfFilesInPicturesPath;
$listOfImages = array();

// GET FILE NAMES IN THE FOLDER
$listOfFilesInPicturesPath = scandir($picturesPath);

// If its an image add it to the listOfImages
foreach ($listOfFilesInPicturesPath as $nameOfFile)
//foreach ($testFolder as $nameOfFile)
{

	//if (itIsAnImage)
	if (endsWith('.jpg', $nameOfFile) || endsWith('.JPG', $nameOfFile) || endsWith('.png', $nameOfFile) || endsWith('.PNG', $nameOfFile))
	// if (true)
	{
		// echo "name:".$nameOfFile;
		// append (nameOfFile) to (listOfImages)
		//($listOfImages) += ($nameOfFile);	
		array_push($listOfImages,$nameOfFile);
	}
}

// create images with names of files
foreach ($listOfImages as $nameOfFile)
{
	//echo '<img src="'+picturesPath+'/'+nameOfFile+'">';
	//echo '<br>'.$picturesPath.'/'.$nameOfFile;
	echo '<img src="'.$picturesPath.'/'.$nameOfFile.'" class="photoimage" width="100%">';

}
/*
*/
// http://stackoverflow.com/questions/834303/startswith-and-endswith-functions-in-php
/*function endsWith($needle, $haystack)
{
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
}*/
function endsWith($needle, $haystack) {
     return preg_match('/' . preg_quote($needle, '/') . '$/', $haystack);
 }

?>
<body>
<img src="pics/kitten_stella.jpg">
</body>
</html>