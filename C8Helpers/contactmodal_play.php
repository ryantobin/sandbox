<html>
    <head>
        <title>Contact Modal</title>
        <style type="text/css">
            body { margin: 0; }
            #overlay, #modal { display: none; }
            #overlay { position: fixed; z-index: 100; top: 0; left: 0; width: 100%; height: 100%; }
            #modal { 
				position: fixed; 
				z-index: 101; 
				top: 33%; 
				left: 25%; 
				width: 50%; 
				/* border: solid black 1px;  */
				border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;
				padding: 10px;
				box-shadow: inset 0 0 10px #000000;
				-moz-box-shadow: inset 0 0 10px #000000;
				-webkit-box-shadow: inset 0 0 10px #000000;
			}
			#overlay {																
				background: #000;
				opacity: 0.5;
				filter: alpha(opacity=50);			
			}
			#content {
				background:white;
				position: relative;
				width: 100%;
			}
			#close {
				background: url(/sandbox/images/close.png) 0 0 no-repeat;
				width:24px;
				height:27px;
				display:block;
				top:-7px;
				right:-7px;
				position: absolute;
			}
			#contactus {
				background: url(/sandbox/images/envelope.png) 0 0 no-repeat;
				cursor: pointer;
				width: 200px;
				height: 100px;
				border: 1px solid black;
			}
        </style>
    </head>
    <body>
        <div id="overlay"></div>
        <div id="modal">
            <div id='content'>
			<?php include "contactform.php" ?>
			</div>
			<a href='' id='close'> </a>
        </div>
		<div id='contactus' onclick="useAJAX()"> </div>
        <p>
		What is the result of: <img src="http://localhost/sandbox/C8Helpers/mathcaptcha_image.php" width='80' height='50' style="position:relative; top: 18px;"/>
            <form name="captcha" method="post" action="" style="display:inline;"><input type="text" name="result" size="4"><input type="submit" value="reload page with value stored" id='test'></form>
			<button id="start">Start</button>
			<?php 
				if(isset($_POST['result']) && $_POST['result'] != ''){
					echo $_POST['result'];
				}
				else echo "Please solve the problem";
			?>
        </p>
		<button onclick="useAJAX()">AJAX</button>
		<div id="reqResult"> </div>
	
        <script type="text/javascript">
			window.onload = function() {
				document.captcha.result.focus();
			}
            var modal= document.getElementById('modal');
            var overlay= document.getElementById('overlay');
            
			// For 'Start' button click:
			document.getElementById('start').onclick= function() {
				// logic to test for humanity
				var number = document.captcha.result.value;
				if(number == 10){
					alert("number: "+number+"<?php echo ' holy cow' ?>");
					
					modal.style.display=overlay.style.display= 'block';
				}
				else {
					alert("How many fingers do <i>you</i> have?");
					//document.getElementById('result').value = '';
					document.captcha.result.value = '';
					document.captcha.result.focus();
				}
            };
			
			// To close the modal:
            document.getElementById('close').onclick= function() {
                modal.style.display=overlay.style.display= 'none';
            };
			document.getElementById('overlay').onclick= function() {
                modal.style.display=overlay.style.display= 'none';
            };
            // This code is a workaround for IE6's lack of support for the "position: fixed" style
            if (!('maxHeight' in document.body.style)) {
                function modalsize() {
                    var top= document.documentElement.scrollTop;
                    var winsize= document.documentElement.offsetHeight;
                    var docsize= document.documentElement.scrollHeight;
                    overlay.style.height= Math.max(winsize, docsize)+'px';
                    modal.style.top= top+Math.floor(winsize/3)+'px';
                };
                modal.style.position=overlay.style.position= 'absolute';
                window.onscroll=window.onresize= modalsize;
                modalsize();
            }
			
//			function xmlHttpPost(toURL,
			function useAJAX () {		
				var xmlHttpReq;
				if(window.XMLHttpRequest)
					xmlHttpReq = new XMLHttpRequest();
				else
					// for older versions of IE
					xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
				
				
				// attempt to open the file
				//xmlHttpReq.open("GET", "testXML.xml", true); // demo - XML
				//xmlHttpReq.open("POST", "testResponse.php", true); // demo - echo output
				//xmlHttpReq.open("POST", "testHttpText.txt", true); // demo - print txt file
				xmlHttpReq.open("POST", "contactform.php", true); // demo - insert php file
				
				// wait until the ready
				xmlHttpReq.onreadystatechange = function () {
					if(xmlHttpReq.readyState == 4 && xmlHttpReq.status == 200) {
						//xmlDoc = xmlHttpReq.responseXML;
						//x=xmlDoc.getElementsByTagName("NAMEA");
						//var blarg = x[0].childNodes[0].nodeValue;
						document.getElementById("reqResult").innerHTML = xmlHttpReq.responseText; // 
						//document.getElementById("reqResult").innerHTML = blarg; // 
					}
					else
						// request never finished or response not ready *or* page not found
						document.getElementById("reqResult").innerHTML = "FAIL"; // 
				}
				
				
				xmlHttpReq.send();
			}
			
        </script>

    </body>
</html>