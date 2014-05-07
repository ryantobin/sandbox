<?php
/* getFolderAsArrayOfNames.php */

$folder = "E:/Backups/WD My Passport 500GB/Files/Photos & Graphics";
$files[] = [filename, size, height, width];

echo "function "
     .$_GET['callback']
     ."() {return "
     .json_encode(scandir('somepath/*.jpg'))
     ."}";


?>