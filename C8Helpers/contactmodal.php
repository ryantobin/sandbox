<?php // requires contactform.php, mathcaptcha_image.php, mailresponse.php (///TODO: Rename for email), possibly one more? ?>

        <style type="text/css">
            body { margin: 0; }
            #overlay, #modal { display: none; }
            #overlay { position: fixed; z-index: 100; top: 0; left: 0; width: 100%; height: 100%; }
			#modalcontainer {
				width: 100%;
				position: absolute;
			}
            #modal { 
				position: relative; 
				z-index: 101; 				
				width: 400px; 
				border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;
				padding: 10px;
				top: -203px;
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
				background: url(http://78.24.208.245/wp-content/plugins/c8contactmodal/close.png) 0 0 no-repeat;				
				width:24px;
				height:27px;
				display:block;
				top:-7px;
				right:-7px;
				position: absolute;
			}
			#contactus {
				background: url(http://78.24.208.245/wp-content/plugins/c8contactmodal/envelope.png) 0 0 no-repeat;
				background-position: 0 center;
				background-size: 140px;
				cursor: pointer;
				width: 280px;
				height: 120px;
				border: 1px solid black;
				border-radius: 4px;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
				text-indent: 150px;
				position: absolute;
				right: 10%;
				top: 100px;
				font-size: 140%;
			}
			#contactus div {
				height: 120px;
				line-height: 120px;
			}
			table, tr, td {
				border: 1px solid transparent;
			}
			#contactform {
				padding: 20px;
			}
			#contactform table {
				position: relative;
				margin: auto;
			}
			#contactform td:first-child {
				text-align: right;
			}
			#contactform #formsubmit {
				position: relative;
				left: 50px;
			}			
			#modalmessage {
				margin: 15px;
				color: red;
				text-align: left;
			}
			#modalmessage p {
				color: black;				
			}
			@media screen and (max-width:680px) {
				#contactus {
					position: relative;
					float:right;
					right: 0;
					top: 0px;
					background-size: 100px;
					width: 200px;
					height: 100px;
					text-indent: 110px;
					font-size: 100%;
					margin-bottom: 10px;
				}
				#contactus div {
					height: 100px;
					line-height: 100px;
				}
			}
			
        </style>

        <div id="overlay" onclick='closeModal()'></div>
        <div id="modalcontainer" align='center'>
			<div id="modal">
				<div id='content'>
				<?php include "contactform.php" ?>
				</div>
				<a href='' id='close' onclick='closeModal()'> </a>
			</div>
		</div>
		<div id='contactus' onclick="contactModal()"> <div> <strong>Message Us </strong> </div> </div>
	
        <script type="text/javascript">
			
            var modal= document.getElementById('modal');
            var overlay= document.getElementById('overlay');
			
			// To close the modal:
			function closeModal () {
				modal.style.display=overlay.style.display= 'none';
			}			
            //document.getElementById('close').onclick = closeModal();
			/*document.getElementById('overlay').onclick= function() {
                modal.style.display=overlay.style.display= 'none';
            };*/
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
			
			
			
			function contactModal() {
				createForm();
				modal.style.display=overlay.style.display= 'block';
				document.getElementsByName('name')[0].focus();
			}
				
        </script>
