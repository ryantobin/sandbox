
<section id='actions'>
	<div class='list'>

		<ul>
			<li>getTitles</li>
			<li>getUnits<li>
			<li>getRoles</li>
		</ul>

	</div>

	<div id='gettitles'>
		This is the getTitles div
	</div>
	<div id='getUnits'>
		This is the getUnits div
	</div>
	<div id='getRoles'>
		This is the getRoles div
	</div>
</section>

<script>

// add span around li's
var lis = document.getElementsByTagName('li');

// Array.forEach(function() {}); // Requires ECMASCript5
lis.forEach
(

	console.log(this);

	function () 
	{
		this.innerHTML = "<span>"+this.innerText.toLowerCase()+"</span>";
	}

);

/** // From proximify auth-api //
var actionsList = $('#actions li span');

var actionList = document.getElementById('api-actions').getElementsByClassName('disc-list')[0].getElementsByTagName('span');
console.log(actionsList);

var actionName;

for(var i = 0; i < actionsList.length; i++) {
	//var actionName = actionList[i].name.substring(actionList[i].name.indexOf('#')+1);
	actionName = actionList[i].attributes['name'].value.substring(actionList[i].attributes['name'].value.indexOf('#')+1);
	//actionsList[i].href = "x";
	//actionList[i].click(function () 
	actionList[i].addEventListener('click', printName(actionList[i]), false);
}

function printName(elem) {
	console.log('you clicked: '+elem.attributes['name'].value);
}

*/

</script>
