<!-- Testing Output -->
	<div id='testoutput'>
		This is test output.
	</div>

	<div id='controls'>
		<div id='brightness'>
			<span>
				<button onclick="Brightness('decrease');">
				-
				</button>
				Brightness
				<button onclick="Brightness('increase');">
				+
				</button>
			</span>
			<script>
				if(!document.getElementById('brightnessfilter')) {
					document.body.innerHTML = "<div id='brightnessfilter'></div>" + document.body.innerHTML;
				}
			</script>
		</div>
		<div id='folder'>
			<form name='foldername'>
				<textarea></textarea>
			</form>
		</div>
	</div>
	
	<script>
		function Brightness(level) {
			// Quick Error Check for dependencies
			if(!$('#brightnessfilter').css)  {
				// jQuery or the object aren't found - this function will not work
				return console.log('Error: jQuery or #brightnessfilter not found');
			}
			// rgba opacity 
			var backgroundColor = $('#brightnessfilter').css('background-color');
			var splitBGColor = backgroundColor.split(',');
			var opacity;
			if(typeof $('#brightnessfilter').css('background-color').split(',')[3] == 'undefined') 
			{
				opacity = 1;
			}
			else
			{
				opacity = parseFloat($('#brightnessfilter').css('background-color').split(',')[3]).toFixed(2);			
			}				
			
			if (level == 'increase') {
				if (opacity == 0)
					opacity = 0;
				else {
					if(opacity == 1) {
						opacity = 0.9;
					}
					else {
						opacity = '0.'+(parseInt(parseFloat(opacity).toFixed(2)[2])-1)
					}					
				}					
			}
			else if (level == 'decrease') {			
				if (opacity == 1) {
					opacity = 1.0;
				}
				else {
					if (opacity == null || parseInt(parseFloat(opacity).toFixed(2)[2]) == 9) {
						opacity = 1.0;
					}
					else {
						opacity = '0.'+(parseInt(parseFloat(opacity).toFixed(2)[2])+1)
					}
				}
			}
			splitBGColor[0] = "rgba("+$('#brightnessfilter').css('background-color').split(',')[0].split('(')[1]
			splitBGColor[2] = parseInt(splitBGColor[2]);
			splitBGColor[3] = " "+opacity+")";
			backgroundColor = splitBGColor.toString();
			$('#brightnessfilter').css('background-color', backgroundColor);
		}
	</script>