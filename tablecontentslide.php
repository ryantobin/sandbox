<!-- Table Content Show with Slide -->
<html>
<head>
<!-- Website browser heading -->
<title>
    
</title>

<!-- jQuery -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Scripts -->
<script>
	var bioHeight = 137;
	$(document).ready(function(){
		// add 'toggle' option if bio is larger than a certain height
		$(".bio").each(function() {
			var innerHeight = $(this).removeClass('bio').height();
			$(this).addClass('bio');

			if(innerHeight > bioHeight) {
				$(this).parent().append("<div class='toggle' style='font: italic; color:#b32017;'>(<b><i>more</i></b>)</div>");
			}
			else {
				$(this).parent().append("<div>&nbsp;</div>");
			}
			// add the True Height attribute - works for opening window size, if resized page needs to be reloaded
			$(this).attr('trueHeight', innerHeight);
		});
		// when 'toggle' is clicked
		$(".toggle").click(function() {
			// find it's height without clipping that we stored before
			var innerHeight = parseInt($(this).prev().attr('trueHeight'));

			// changed contents of 'toggle' to match desired grow/shrink
			if(($(this).prev().height() == bioHeight)){
				$(this).html("(<b><i>less</i></b>)");
			}
			else {
				$(this).html("(<b><i>more</i></b>)");
			}	
			// slide or shrink 'bio' to fit
			$(this).prev().animate({
				height: (($(this).prev().height() == bioHeight)? (innerHeight+30) :  parseInt(bioHeight)+"px")
			}, 'swing');
		});
	});

</script>

<!-- Styles -->
<style>
    body {
        background-color: black;
        color: orange;
    }
	table {
		display: block; /* as opposed to display:table-cell; default */
		 
	}

	td {
		padding: 0 5px 16px;
	}
	.bio {
		height: 137px;
		overflow: hidden;
		position: relative;
		clear: both;
	}
	.bio-img {
		width: 122px;
		background-position: 50% 50%;
	}
	.toggle {
		position: relative;
		float: right;
		bottom: 0;
		left: 0;
		cursor: pointer;
		width: 100%;
	}
	.heart {
		color: red;
		font-size: 5em;
		font-style: bold;
	}
</style>

</head><!-- end header -->

<!-- BODY -->
<body>
<button id='test' onclick="testAlert()">Test Button</button>
<div style='margin-left: auto; margin-right: auto;'>
	<table style="">
		<tr>
			<td class='bio-img' style='background: url(images/mike-tobin-bw.jpg) no-repeat;'>				
			</td>
			<td>
				<div class='bio' id='1'>
					<h3>First person</h3> 
					<em><strong>Shareholder and Chief Executive Officer</em></strong>
					<p>Michael is co-founder of Continent 8 Technologies PLC and the creator of the “Continent 8” brand. He is a Certified Public Accountant by profession and an entrepreneur by nature. He is a former Director of Empire State Development, the lead economic development agency for New York State.</p>
					<p>Michael is a graduate of Montreal’s McGill University</p>
				</div>
			</td>
		</tr>	
		<tr>
			<td style='background: url(images/mike-tobin-bw.jpg) no-repeat;'>
			</td>
			<td> 
				<div class='bio' id='second'>
					<h3> Michael Tobin </h3>
					<em><strong>Shareholder and Chief Executive Officer</strong></em> 
					<p>Michael is co-founder of Continent 8 Technologies PLC and the creator of the “Continent 8” brand. He is a Certified Public Accountant by profession and an entrepreneur by nature. He is a former Director of Empire State Development, the lead economic development agency for New York State.</p>
					<p>Michael is a graduate of Montreal’s McGill University</p>
					<p>Once upon a tim there was a little boy name Timmy, who loved to play.</p>
					<p>timmy's mum was a very nice lady who made chocolate chip cookies everyday</p>
					
					<a class="top" href="#top">? top</a>
				</div>
			</td>
		</tr>
		<tr>
			<td style='background: url(images/mike-tobin-bw.jpg) no-repeat;'>
				
			</td>
			<td> 
				<div class='bio' id='3'>
					<h3>buck</h3>
					<em><strong>Shareholder and Chief Executive Officer</strong></em> 
					<p>k</p>
				</div>
			</td>
		</tr>
		<tr>
			<td style='background: url(images/mike-tobin-bw.jpg) no-repeat;'>
				
			</td>
			<td> 
				<div class='bio' id='3'>
					<h3>other guy</h3>
					<em><strong>Shareholder and Chief Executive Officer</strong></em> 
					<p>Michael is co-founder of Continent 8 Technologies PLC and the creator of the “Continent 8” brand. He is a Certified Public Accountant by profession and an entrepreneur by nature. He is a former Director of Empire State Development, the lead economic development agency for New York State.</p>
					<p>Michael is a graduate of Montreal’s McGill University</p>
					<a class="top" href="#top">? top</a>
				</div>
			</td>
		</tr>		
	</table>
</div>
</body> <!-- end body -->
</html> <!-- end html -->
