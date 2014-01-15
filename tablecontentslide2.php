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
	$(document).ready(function(){
		// add 'toggle' option if bio is larger than a certain height
		$(".bio").each(function() {
			var innerHeight = $(this).removeClass('bio').height();
			$(this).addClass('bio');

			if(innerHeight > 145) {
				$(this).addClass("more");
			}
			
			var content = $(this).html();
			var showChar = 140; // number of chars to show by default
			var ellipsestext = "...";
			var moretext = "more";
			var lesstext = "less";
			
			if(content.length > showChar) {
				var c = content.substr(0, showChar);
				var h = content.substr(showChar-1, content.length - showChar);
				
				var html = c + '<span class="ellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
				
				$(this).html(html);
			}
			// add the True Height attribute
			var trueHeight = $(this).attr('trueHeight', innerHeight);

		});
		
		$(".morelink").click(function(){
			var c = ($(this).parent()).parent().children().html();
			//var c = $('#second').html();
			alert(c);

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
		 
		background: grey; 
	}
	.bio {
		height: 147px;
		overflow: hidden;
		position: relative;
	}
	.bio-img {
		width: 122px;
	}
	.toggle {
		position: absolute;
		float: right;
		bottom: 0;
		left: 0;
		cursor: pointer;
		width: 100%;
		background: grey;
	}
	.morelink {
		color: black;
	}
	a {
    color: #0254EB
}
a:visited {
    color: #0254EB
}
a.morelink {
    text-decoration:none;
    outline: none;
}
.morecontent span {
    display: none;
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
					&nbsp;&nbsp;Michael is co-founder of Continent 8 Technologies PLC and the creator of the “Continent 8” brand. He is a Certified Public Accountant by profession and an entrepreneur by nature. He is a former Director of Empire State Development, the lead economic development agency for New York State.
					&nbsp;Michael is a graduate of Montreal’s McGill University
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
