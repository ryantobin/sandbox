<div id='top-banner'>
	<span> August 2, 2015</span>
	<span class='names'>Kristen &amp; Ryan</span>
	<span> Wakefield, QC</span>
</div>
<nav id='main-menu'>
	<a href='index.php'><span>Home</span></a>
	<a href='pre-wedding.php'><span>Pre-Wedding Events</span></a>
	<a href='wedding-day.php'><span>Wedding Day</span></a>
	<a href='accommodation.php'><span>Accommodation</span></a>
	<a href='rsvp.php'><span>RSVP</span></a>
</nav>

<script>
// add 'currentpage' class and replace href = '#'

var menu = document.getElementById('main-menu');

switch (window.location.href.split('/').pop().split('.')[0]) {
	case 'index':
		menu.getElementsByTagName('a')[0].href = '#';
		menu.getElementsByTagName('a')[0].className = 'currentpage'
		break;
	case 'our-story'

	default:
		break;
}



</script>