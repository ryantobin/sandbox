<div class='wrapper'>
	<div id='box'>
		<div id='top'>
		</div>
	</div>
</div>
<div class='wrapper'>
	<div id='box'>
		<div id='class-links'>
			<ul>
				<li name='druid'>Druid</li>
				<li name='warrior'>Warrior</li>
				<li name='hunter'>Hunter</li>
				<li name='rogue'>Rogue</li>
				<li name='priest'>Priest</li>
				<li name='paladin'>Paladin</li>
				<li name='mage'>Mage</li>
				<li name='shaman'>Shaman</li>
				<li name='warlock'>Warlock</li>
				<li name='dk'>Death Knight</li>
				<li name='monk'>Monk</li>
			</ul>
			<script type="text/javascript">
			    // locate your element and add the Click Event Listener
			    document.getElementById("class-links").addEventListener("click",function(e) {
			        // e.target is our targetted element.
			                    // try doing console.log(e.target.nodeName), it will result LI
			        if(e.target && e.target.nodeName == "LI") {
			            // alert(e.target.getAttribute('name') + " was clicked");			            
			            var pres = document.getElementsByTagName('pre');
			            var lis = document.getElementsByTagName('li');
			            for (var j = 0; j < lis.length; j++) {
			            	lis[j].style['border-color'] = 'gray';
			            }	
			            e.target.style['border-color'] = 'blue';		            	
			            for (var i = 0; i < pres.length; i++) {
			            	pres[i].style['display'] = 'none';
			            }
			            document.getElementById(e.target.getAttribute('name')).style['display'] = 'block';
			        }
			    });
			   window.onload = function() { document.getElementsByTagName('pre')[0].style['display'] = 'block'; };
			</script>
		</div>
	</div>
</div>		
<div class='wrapper'>
	<div class='box'>
		<div id='content'>
			<p>
				Each class can have up to 18 individual macros.
			</p>
			<p>
				Each account has used to have 18 shared macros, but now has around 100.
			</p>
			<div id='macro-body'>
				<?php

					$listOfFiles = scandir(getcwd());
					$macroArray = array();
					foreach ($listOfFiles as $key => $nameOfFile) {
						// echo '<br>'.$nameOfFile;
						//print_r(stripos($nameOfFile, 'macros-cache-'));
						//print_r(stripos($nameOfFile, 'macros-cache-') != false);

						if (stripos($nameOfFile, 'macros-cache-') !== false && stripos($nameOfFile, 'Copy') === false) {
							array_push($macroArray,$nameOfFile);
						}
					}		
					$macroFile = array();
					foreach ($macroArray as $filename) {						
						// print file_get_contents ($filename);
						$classname = explode('-', str_replace('.txt', '', $filename))[2];
						$macroFile[$classname] = file_get_contents($filename);
						//echo "<br>".$classname."<br>";
						echo "<pre id=".$classname." style='display: none;'>".$macroFile[$classname]."</pre>";
						// if($name == 'rogue') echo $macroFile[$name];
						// echo stripos($macroFile[$classname], 'ver');
						// echo stripos($macroFile[$classname], 'end');
						// if(stripos($macroFile[$classname], 'ver'))  {
						//     echo 'New line break found';
						// }
						// else {
						//     echo 'not found';
						// }
					}
				?>
			</div>
		</div>
	</div>
</div>