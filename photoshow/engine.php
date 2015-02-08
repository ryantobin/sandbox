<?php 

/*

engine.php

*/

class PhotoshowEngine 
{
/************************************************

		Display Pictures
		// displays images in a specified folder as 
			individual image tags

*************************************************/
function getPicturesFrom($foldername) {
	// GET INITIAL IMAGES FROM FOLDER AND CREATE IMAGES FOR THEM
	// DEFINE FOLDER NAME HERE - your photo folder in the website directory
	$picturesFolderName = $foldername;
	// if you don't specify something, it will assume one of the following folders
	$autopaths = array('image', 'img', 'graphic', 'photo', 'picture', 'pic', "");
	foreach ($autopaths as $type) {
		$picturesPath = $foldername ? $foldername : "pics";
	}

	

	// if its not null, foldername is the picturesPath	
	$picturesPath = $foldername ? $foldername : "pics";
	//echo $picturesPath;
	$listOfFilesInPicturesPath;

	// VARIABLES
	$listOfImages = array();

	// GET FILE NAMES IN THE FOLDER
	$listOfFilesInPicturesPath = scandir($picturesPath);

	// If its an image add it to the listOfImages
	foreach ($listOfFilesInPicturesPath as $nameOfFile)
	//foreach ($testFolder as $nameOfFile)
	{
		$fileTypes = array('jpg', 'png', 'jpeg', 'gif');

		foreach ($fileTypes as $allowed) {
			if($this->endsWith($allowed, $nameOfFile)) {
				array_push($listOfImages,$nameOfFile);
			}
		}
		//if (itIsAnImage)
		// if (endsWith('.jpg', $nameOfFile) || endsWith('.JPG', $nameOfFile) || endsWith('.png', $nameOfFile) || endsWith('.PNG', $nameOfFile))
		// {
		// 	// echo "name:".$nameOfFile;
		// 	// append (nameOfFile) to (listOfImages)
		// 	//($listOfImages) += ($nameOfFile);	
		// 	array_push($listOfImages,$nameOfFile);
		// }
	}

	// create images with names of files
	foreach ($listOfImages as $nameOfFile)
	{
		//echo '<img src="'+picturesPath+'/'+nameOfFile+'">';
		//echo '<br>'.$picturesPath.'/'.$nameOfFile;
		echo '<div class="image-wrapper"><img src="'.$picturesPath.'/'.$nameOfFile.'" class="photoimage"></div>';

	}
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


}
?>