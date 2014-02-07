// php scraper

<?php
	
	define('SCRAPER', 'scaper.php');

?>

<!DOCTYPE html>

<html>
<body>

	<h1>Scraper Lab</h1>
	
	<h3>
		Enter the Source Address.  Currently [.mp4] types are supported.
	</h3>
	<form id='input_form' action='SCRAPER'>
		<input type="text" name="source_address">
		<input type="text" name="destination_folder">
		<input type="hidden" name='source_elements'>
		<input type="submit">
		<!-- ///TODO: add other conditions or filters // less than {size} // only with {fields} in the name
		<input type="text" name="filters">
	-->
	</form>


<script>
// Script to help pre-process the form
// We want to extra the elements from the DOM, then pass them to php

// we need to access the html object entity - 
    ///TODO: will
<?php 
	if isset($_POST['source_address'])
    {
		echo("alert('source_address from form: ' . $_POST['source_address'] . ')'");
	}		    
?>

<?php
	///TODO: get html page
	///TODO: make it accessible to JavaScript
	///TODO: convert forms from html to javascript clicks

?>

var document.getElementsByName("source_address")

function AJAX_variable_to(path, endpoint, action, type, variable) 
{
	xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    /* The above was shortened from:
    // if (window.XMLHttpRequest) 
    // {
    //     xmlhttp = new XMLHttpRequest();
    // } 
    // else 
    // {
    //     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    // }
    */

    xmlhttp.onreadystatechange = function() 
    {
       if(xmlhttp.readyState==4 && xmlhttp.status==200) 
       {
           document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
           
       }
    }


// of the form: "theaterdel.php?q="+a
    path = "localhost/scraper/";
    endpoint = "scraper.php";
    resource = "";
    action = "";
    query = "?";
    query +=variable

    var file_to_send_to = path + endpoint + resource + action + query;

    xmlhttp.open("GET",path+"theaterdel.php?q="+a,true);
    alert(a)
    xmlhttp.send();
}

</script>



<!-- AJAX to populate status updates -->

<div id='download_process'>
	<div
</div>

</body>

</html>

<?php

?>