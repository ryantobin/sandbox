
<section id='actions'>
	<div class='list'>

		<ul>
			<li>getTitles</li>
			<li>getUnits</li>
			<li>getRoles</li>
		</ul>

	</div>

	<div id='gettitles'>
		This is the getTitles div
	</div>
	<div id='getunits'>
		This is the getUnits div
	</div>
	<div id='getroles'>
		This is the getRoles div
	</div>
</section>

<script>
window.onload = function () 
{
	// add span around li's
	var lis = document.getElementsByTagName('li');
	var li;
	// Array.forEach(function() {}); // Requires ECMASCript5
	//lis.forEach( );

	for(var i = 0; i < lis.length; i++)
	{
		li = lis[i];
		console.log(li);
		var liLink = li.innerText.toLowerCase();
		console.log(liLink);
		//li.onclick = "hideDiv("+liLink+")";
		li.setAttribute("onclick", "showDiv('"+liLink+"')");
		li.name = liLink;
		console.log(li.name);
	}
} ();



function hideDiv(id)
{
	document.getElementById(id).style.display = 'none';
}

function showDiv(id)
{
	var currentActive = 

	if(currentActive[0])
	{
		delete(currentActive[0].className);
		currentActive[0].style.display = 'none';
	}

	document.getElementById(id).className = 'activeLi';
	document.getElementById(id).style.display = 'block';
}



function lowerCase(elem) 
	{
		console.log(this);
		console.log(elem);
		this = elem;
		this.innerHTML = "<span>"+this.innerText.toLowerCase()+"</span>";
	}


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
