<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" language="javascript" src="main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<div id="dan">

	<script type="text/javascript">
function AlertIt() {
var answer = confirm ("Please click on OK to continue.")
if (answer)
window.location="http://www.continue.com";
}
</script>

<a href="javascript:AlertIt();">click me</a>

</div>
<div id="iwao">

<script type="text/javascript">

$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});

</script>

<a href="javascript:hide();">click me to hide</a>

</div>
</body>
</html>