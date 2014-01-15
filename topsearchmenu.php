<!-- Top Menu Sandbox Page -->

<html>
<head>
<!-- Website browser heading -->
<title>
Test Pages | Grow search on focus -- shrink on blur    
</title>
<!-- Scripts -->

<script>
    // Functions to manipulate search field
    function growSearch() {
		if(document.body.offsetWidth > 940) {
			var search_field = document.getElementById("search");
			var search_box = document.getElementById("search-box");
			var top_box = document.getElementById("top-box");
			search_field.style.width = "390px";
			search_box.style.width = "570px";
			top_box.style.width = "606px";
			}
    }
    function shrinkSearch(bar) {
		if(document.body.offsetWidth > 940) {
			var search_field = document.getElementById("search");
			var search_box = document.getElementById("search-box");
			var top_box = document.getElementById("top-box");
			search_field.style.width = "200px";
			search_box.style.width = "380px";
			top_box.style.width = "416px";
		}
	}
    // functions to facilitate menu drop downs
    function displayWidth () {
		var windowWidth = document.body.offsetWidth;
		var searchBoxWidth = document.getElementById("search-box").offsetWidth;
		var portalButtonWidth = document.getElementById("portal-button").offsetWidth;
		var searchWidth = document.getElementById("search").offsetWidth;
		var searchSubmitWidth = document.getElementById("search-submit").offsetWidth;
		document.body.appendChild(document.createTextNode("\rTotal window: " + windowWidth + " search-box: " + searchBoxWidth + " portal-button: " + portalButtonWidth + " searchWidth: " + searchWidth + " search-submit: " + searchSubmitWidth));
		var br = document.createElement("br");
		document.body.appendChild(br);
	}
</script>

<!-- Styles -->
<style>
    body {
        background: url('images/Chrysanthemum.jpg') no-repeat;
		background-size: 1690px 1267px;
        color: black;	
    }
	#top-box {	
		border: solid black 3px;
		border-radius: 4px;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px;
		opacity: 0.2;
		background: black;
		height: 6em;
        position: absolute;
		-moz-transition: width 1s;
        -webkit-transition: width 1s;
        transition: width 1s;        
		right: 15px;
		top: 17px;
		width: 416px;
	}
    #search-box {
        background: white;
        width: 380px;
        height: 3em;
        position: absolute;
        right: 30px;
        top: 30px;
        -moz-transition: width 1s;
        -webkit-transition: width 1s;
        transition: width 1s;        
        border: white solid 5px;
		color: white;
    }
    #search {
    	padding: 8px 5px;
        position: relative;*/
        background: white;
        color: black;
        width: 170px;
        -moz-transition: width 1s;
        -webkit-transition: width 1s;
        transition: width 1s;
		placeholder: search...
    }
    #portal-button {
        padding: 10px 15px;
        background: #B32017; /* #4479BA; */
        color: white;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border: solid 1px #9B2017; /* #20538D; */
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
	    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
	    -webkit-transition-duration: 0.2s;
	    -moz-transition-duration: 0.2s;
	    transition-duration: 0.2s;
	    -webkit-user-select:none;
	    -moz-user-select:none;
	    -ms-user-select:none;
	    user-select:none;
        margin: 5px;
    }
    #portal-button:hover {
	    background: #932017; /* #356094; */ 
	    border: solid 1px #712017; /* #2A4E77; */
	    text-decoration: none;
	    cursor: pointer;
    }
    #portal-button:active {
	    -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    -moz-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.6);
	    background: #792017;
	    border: solid 1px #9B2017;
    }
	#search-submit {
		background: url("images/glyphicons_027_search_white.png") no-repeat scroll 50% 50% #6D6E70;
		padding: 10px 18px;
		position:absolute;
		right: 0;
		margin-top: 2px;
		margin-right: 5px;
	}
	 
	.contact #inquiries, .contact #sales, .contact #support  {
		float: left;
		margin-right: 5px;
		padding: 7px 0 7px 25px;
		width: 25%;
	}
	.contact #inquiries {
		background: url("images/contact_inquiries.png") no-repeat 0 50% transparent;
	}
	.contact #sales {
		background: url("images/contact_sales.png") no-repeat 0 50% transparent;
	}
	.contact #support {
		background: url("images/contact_support.png") no-repeat 0 50% transparent;
	}
	.contact span {
		position: relative;
		top: 0.5em;
	}
	.up-arrow {
		height: 0;
		width: 0;
		border-right: 8px solid transparent;
		border-left: 8px solid transparent;
		border-bottom: 8px solid black;
		float: left;
		top: -0.5em;
		display: block;
		z-index: 100;
		position: relative
	}
	#ua-1 {
		left: 8%;
	}
	#ua-2 {
		left: 36%;
	}
	#ua-3 {
		left: 72%;
	}
	#inquiries:hover ~ #contactinfo, #sales:hover ~ #salesinfo, #support:hover ~ #supportinfo {
		display: block;		
	}
	#contactinfo {
		min-height: 5em;
	}
	.contactitem {
		display: none;
		background: black;
		padding: 0 1em 1em;				
		z-index: 99;
	}
	#contactinfo:hover,	#salesinfo:hover, #supportinfo:hover {
		display: block;
	}

</style>

</head><!-- end head -->

<!-- BODY -->
<body>
<div id='container'>
	<button onclick="displayWidth()">Width</button><br>
	<div id="top-box"></div>
    <div id="search-box">
	<!--  Portal Button - Search Field - Search Button -->
    	<span>
	        <button id='portal-button'>Customer Portal</button>
	        <input type="text" id="search" onfocus="growSearch(this)" onblur="shrinkSearch(this)">
	        <input type="submit" id="search-submit" value=' '>
		</span>
		
	<!--  Contact Items -->	
		<div class="contact">
			<div id="inquiries">Inquiries</div>						
			<div id="sales">Sales</div>
			<div id="support">Support</div>
			<div style="clear:both"></div>

			<div id="contactinfo" class="contactitem"> 
				<div class="up-arrow" id='ua-1'></div>
				<span><a href="mailto:ryan@tobin.ca"><img src="images/envelope.png" style="float:left"></a>
					This is a bunch of contact info lorem ipsem latino baluga whalebone hpph huu buu ny kjk ihiuh i u lkjljkh kljh jkhk jh 
				</span>
			</div>
			<div id="salesinfo" class="contactitem">
				<div class="up-arrow" id='ua-2'></div>
				<span>This is some sales info</span>
			</div>
			<div id="supportinfo" class="contactitem">
				<div class="up-arrow" id='ua-3'></div>
				<span>This is some support info</span>
			</div>
		</div>
    </div>
</div> <!-- end container -->
</body> <!-- end body -->
</html> <!-- end html -->
