						<?php 
						// This code will give the root path

						// Replace \ by / and remove the final / if any
						$sourcepath = str_replace("\\", "/", __DIR__);
						$sourcepath = str_replace("/$", "", $sourcepath);
						// could also use rtrim($sourcepath, '/')
						// drop down two folders
						echo 'attempt at weboot<br>';
						// offset to first / from rear
						$offset = strrpos($sourcepath, '/');
						$substring = substr($sourcepath, 0, $offset);
						// offset to second / from rear
						$offset = strrpos($substring, '/');
						$sourcepath = substr($sourcepath, 0, $offset);

						var_dump($offset);
						$webroot = $sourcepath;

						echo "webroot";
						echo $webroot;

						?>