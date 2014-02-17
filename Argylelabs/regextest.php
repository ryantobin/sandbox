Check the Console!

(FAIL)
<script>
var pattern = /;
var modifiers = 'i';
var regex;

var result;

function result(str, reg) {
	var regex = new RegExp(reg);
	result = regex.exec(str);
	console.log(result);
}
</script>