<?php 
header("HTTP/1.0 404 Not Found");

// Testing 'this'
// just returns errors
// print_r($this->this);

// global scope variable
$a = 1;
$b = array(2,3,4);
function test() {
	echo $a;
}
echo ("\n\nvar_dump($a) : ");
var_dump($a);
var_dump($b);
echo sizeof($b);

?>

<div id='jsout'>
someting more aaaaaaaaa
</div>

<script>
var b = 1;

var jsout = document.getElementById('jsout');
jsout.innerHTML(this);

function jTest() {
	console.log("b = "+b);
	jsout.innerHTML += b;
}

jTest();

</script>

<style>
	#jsout {
		padding: 5px;
		border: 1px solid black;
	}
</style>
