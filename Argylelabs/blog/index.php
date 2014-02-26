<?php

?>

<h1>Test -- File System Blog</h1>

<div id='directory'>
<?php
	$sourcepath = "C:\wamp/www/sandbox/ArgyleLabs/blog/entries/";

echo "sourcepath before: $sourcepath<br>";

	// Replace \ by / and remove the final / if any
	$sourcepath = str_replace("\\", "/", $sourcepath);
	$root = str_replace("/$", "", $sourcepath);

	//if($handle = opendir($sourcepath)) 
	if($handle = opendir($root)) 
	{
		echo "Sourcepath: $sourcepath<br>";
		echo "Root: $root<br>";
		echo "Directory handle: $handle<br>";
		echo "Entries:<br>";
		echo "<ul>";
		// readdir - returns the name of the next entry in the directory, returned in the order in which they are stored by the filesystem
		// returns the entry name on success or FALSE on a failure
		while (false !== ($entry = readdir($handle)))
		{
			echo "<li>";
			echo "$entry\n";
			echo "</li>";
		}
		echo "</ul>";
		closedir($handle);
	}
?>
</div>

<div id='request-related'>

	<?php
		$keys = array('something', 'another');
		$testNotEmpty = !empty($_REQUEST) ? 'true' : 'false';
		echo "Is request not empty? $testNotEmpty <br>";

		echo "The REQUEST: <br>";
		print_r ($_REQUEST);
		echo count($_REQUEST);
		
		foreach ($_REQUEST as $key => $value)
		{
			echo "key: $key, value: $value<br>";
		}
	?>

</div>



