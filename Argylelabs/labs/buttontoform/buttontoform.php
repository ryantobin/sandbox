
<!DOCTYPE html>

<style>

	#button-form-container {
		margin: 40px auto;
		text-align: center;
		width: 180px;
	}
	.btn {
		padding: 15px 30px;
		color: white;
		background: green;
		overflow: hidden;
	}
	.btn-label:hover {
		cursor: pointer;
	}
	.cancel-btn {
		cursor: pointer;
	}
	.btn-form {
		opacity: 0;
		display: none;
	}
	/*	.btn-grow {
		-webkit-transition: height 2s;
		transition: height 2s;
		-webkit-transition: width 2s;
		transition: width 2s;
		height: 300px !important;
		width: 300px !important;
		overflow: hidden;
	}*/
</style>

<body>

// buttontoform
<div id='button-form-container'>
	<!-- <div class='btn' id='btclick' onclick='expandToForm();'> -->
	<div class='btn' id='btclick'>
		<div class='btn-label'>Free Consultation</div>
		<div class='btn-form'>
			<form action='mailToMe()'>
				<div class='input-wrapper'>
					<label>Name</label>
					<input type='text' maxchars='32'></input>
				</div>
				<div class='input-wrapper'>
					<label>Email</label>
					<input type='email' maxchars='32'></input>
				</div>
				<div class='btn cancel-btn'>
					Cancel
				</div>
			</form>
		</div>
	</div>
</div>
</body>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>

$('#btclick .btn-label:first').click(function() {
	$('#btclick .btn-label:first').css('opacity', '0');
	$('#btclick .btn-label:first').css('display', 'none');
	$('#btclick .btn-form:first').css('display', 'block');
	$('#btclick').animate({width: '300px'}, {queue: false, duration: 600, easing: 'swing'});
	// $('#btclick').animate({height: '300px'}, {queue: false, duration: 1200}, 'swing');
	$('#btclick').animate({height: '300px'}, {queue: false, duration: 600, easing:'swing', complete:
		function() {
		$('#btclick .btn-form:first').animate({'opacity': '1'}, {queue: false});
		// $('#btclick .btn-form:first').css('opacity', '1 !important');
		// $('#btclick .btn-label:first').unbind('click');
		}
	});

});



$('#btclick .cancel-btn:first').click(function() {
	$('#btclick .btn-label:first').css('opacity', '1');
	$('#btclick .btn-label:first').css('display', 'block');
	$('#btclick .btn-form:first').css('display', 'none');
	$('#btclick').animate({width: '120px'}, {queue: false, duration: 600, easing: 'swing'});
	// $('#btclick').animate({height: '300px'}, {queue: false, duration: 1200}, 'swing');
	$('#btclick').animate({height: '18px'}, {queue: false, duration: 600, easing:'swing', complete:
		function() {
		$('#btclick .btn-form:first').animate({'opacity': '0'}, {queue: false});
		// $('#btclick .btn-form:first').css('opacity', '1 !important');
		}
	});

});

function expandToForm() {
	var divToEx = document.getElementsByClassName('btn')[0];

	// expand
	//divToEx.style.height = '300px';
	//divToEx.style.width = '300px';
	
	if(divToEx.innerHTML === 'Free Consultation') 
	{ 
		divToEx.innerHTML = 'This is a new thing';
		divToEx.classList.add('btn-grow');
	} else {
		divToEx.innerHTML = 'Free Consultation';
		var computedStyle = window.getComputedStyle(divToEx);
		var width = computedStyle.getPropertyValue('width');
		var height = computedStyle.getPropertyValue('height');
		divToEx.style.width = width;
		divToEx.style.height = height;
		divToEx.classList.remove('btn-grow');    
	}
}



/*
document.getElementsByClassName('btn')[0].onclick = function() {
  if(this.innerHTML === 'Free Consultation') 
  { 
    this.innerHTML = 'This is a new thing';
    divToEx.classList.add('btn-grow');
  } else {
    this.innerHTML = 'Free Consultation';
    var computedStyle = window.getComputedStyle(divToEx);
    var width = computedStyle.getPropertyValue('width');
    var height = computedStyle.getPropertyValue('height');
    divToEx.style.width = width;
    divToEx.style.height = height;
    divToEx.classList.remove('width');    
    divToEx.classList.remove('height');    
  }  
*/

</script>
