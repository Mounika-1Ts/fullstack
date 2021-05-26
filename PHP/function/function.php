<html>
<head><center><h1>RESULT</h1></center><br><br><br>
</head>
<body><center>
<?php
$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
function calc($a,$b)
{
	$c=$a+$b;
	echo "a+b=$c";
}
calc($a,$b);
	
?>
</center>
</body>
</html>