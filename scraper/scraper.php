// scraper.php

/* This is the puppy that does all the work.
 *
 *
 */
<?php

///TODO: Determine format to output response text // can include : // application/json // html
header("Content-type: text/plain")

class scraper {
 // on the desired page to scrape .mp4 (or other type of files from)

/// Declare Variables
global $source_address = "";
global $destination_folder = "";  ///TODO: can you combine these in one line? "global s_a = d_f = ''" or "global s_a, d_f = ''"

protected $data_to_write = "";  // for now this will be some simple text to a text file, but would be one of the files found that would be downloaded to the d_f

private $data;

function __construct() {
	///TODO: check 'if GET exists'
	$source_address = $_GET[source_address];

	///TODO: if download paths are relative to parent doc (not displaying full address path)


	$destination_folder = $GET[destination_folder];

	// download page html
	$bytes_read = file_put_contents($destination_folder, $data);  // this returns the number of bytes read into the file
	echo $bytes_read . "bytes were read";

	echo "enough - end of __construct()";
}


///TODO: regex to extra filers
// (for first sample before REGEX) look for any link that is marked with .mp4 in the pathname


// then save it as it's query

// https://class.coursera.org/db/lecture/download.mp4?lecture_id=1
}

///TODO: ? Do you need to create an instantiation in an object of the class ?
// $scraper_instance = new Scraper();
?>