<?php
/* 
 * index_old.php
 * - scrapped from use and replace with index.php
 */
?>
<html>
<head>
  <title>Photoshow</title>
  <link type='text/css' rel='stylesheet' href='photoshow.css'>
  <script src='../js/jquery-1.8.2.js'>
</head>
<script>

/* get/create list of images stored in a folder */
// folder the images are store in

var images;
$.ajax({
  url: 'getFolderAsArrayOfNames.php',
  dataType: 'json',
  success: function(data) {
    for(var i=0;i<data.length;i++) {
      images.folder = data.folder;
    }
  });
});
var image;
// image.folder = "E:/Backups/WD%20Passport/Files/Photos%20&amp;%20Graphics";
image.folder = "E:/Backups/WD My Passport 500GB/Files/Photos & Graphics";


// array of: img.name, img.height, img.width, img.size, img.location
// add the first five images to the array

  //?? get their dimensions 
  //?? calculate heights on page for each ///TODO: (on page load and resize)

/* add the images to the webpage */
// create html entities with properties
// img or background-image - each image, full screen to the window
// id = their name

// script to lazy load images (depending on how fast you scroll and how far down you scroll)

// parallax to label days, places or events

// get heights first

// extra containing slider entity
// slide similar pictures back and forth (only show the good ones but provide a way to show all

// download - email - select/send/link
</script>

<?php

?>
<body>
  <div id='content'>
    <div id='cover'></div>
    <div class='welcome-splash'></div>
    <div class='first-splash'></div>
    <div class='second-splash'></div>
  </div>  
</body>
</html>