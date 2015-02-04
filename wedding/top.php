<div id='top-banner'>
	<span> August 2, 2015</span>
	<span class='names'>Kristen &amp; Ryan</span>
	<span> Wakefield, QC</span>
</div>
<nav id='main-menu'>
	<a href='index.php'><span>Home</span></a>
	<a href='pre-wedding.php'><span>Pre-Wedding Events</span></a>
	<a href='wedding-day.php'><span>Wedding Day</span></a>
	<a href='accommodations.php'><span>Accommodations</span></a>
	<a href='rsvp.php'><span>RSVP</span></a>
</nav>

<script>
// add 'currentpage' class and replace href = '#'

var menu = document.getElementById('main-menu');
var pageName = window.location.href.split('/').pop().split('.')[0];

document.getElementById('content').className = pageName;

switch (pageName) {
	case 'index':
		menu.getElementsByTagName('a')[0].href = '#';
		menu.getElementsByTagName('a')[0].className = 'currentpage';
		break;
	case 'pre-wedding':
		menu.getElementsByTagName('a')[1].href = '#';
		menu.getElementsByTagName('a')[1].className = 'currentpage';
		break;
	case 'wedding-day':
		menu.getElementsByTagName('a')[2].href = '#';
		menu.getElementsByTagName('a')[2].className = 'currentpage';
		break;
	case 'accommodation':
		menu.getElementsByTagName('a')[3].href = '#';
		menu.getElementsByTagName('a')[3].className = 'currentpage';
		break;
	case 'rsvp':
		menu.getElementsByTagName('a')[4].href = '#';
		menu.getElementsByTagName('a')[4].className = 'currentpage';
		break;
	default:
		break;
}



</script>