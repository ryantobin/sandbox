<?php

class Blog {

	public function __construct()
	{
		
	}

}
//$file = 'http://www.argylelabs.ca';
$file = 'test.txt';

$new_content = 'more content';

// open the file to get existing content
$current = file_get_contents($file);

// METHOD 1)
// Append new content to the file

$current .= $new_content."\n";

// Write the content back to the file
file_put_contents($file, $current);

// or
// METHOD 2)
// Use the FILE_APPEND flag to append the content to the end of the file
file_put_contents($file, $new_content, FILE_APPEND)


?>