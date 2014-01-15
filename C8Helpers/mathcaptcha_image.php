<?php

	$the_img = imagecreate(75,35);
	$background = imagecolorallocate($the_img, 0, 0, 0); // black
	$text_color = imagecolorallocate($the_img, 255, 255, 255); //white
	$line_color = imagecolorallocate($the_img, 128, 255, 0); // ?
	$num1 = rand(1, 9);
	$num2 = 10 - $num1;
	imagestring($the_img, 5, 7, 10, "$num1 + $num2 =", $text_color); // img, font-size, x, y, text, color
	//imagesetthickness($the_img, 5);
	imageline($the_img, 30, 45, 165, 45, $line_color);
	
	header("content-type: image/png");
	imagepng($the_img);
	//imagecolorallocate($line_color);
	//imagecolorallocate($text_color);
	//imagecolorallocate($background);
	//imagedestroy($the_img);
	
?>

<!--

http://v2.scriptplayground.com/tutorials/php/PHP-Based-CAPTCHA-Using-Simple-Math/

-->