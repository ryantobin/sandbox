

function elementExists(id) {
	if(!document.getElementById(id)) {
		//document.body.innerHTML = "<div id='brightnessfilter'></div>" + document.body.innerHTML;
		console.log(id + 'not found');
	}	
}
if(!document.getElementById('brightnessfilter')) {
	//document.body.innerHTML = "<div id='brightnessfilter'></div>" + document.body.innerHTML;
	console.log('brightnessfilter not found');
}