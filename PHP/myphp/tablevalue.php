<DOCTYPE html>
<html>
<head>
<title>
insert value
</title>
<body>
<center>
<center><h1>Output for the number</h1></center><br><br>
<?php
$A1=$_REQUEST['A1'];
for($i=1;$i<=10;$i++)
{
	$c=$A1*$i;
	echo "$A1*$i=$c <br><br>";
}
?>
<br><br>
<button onclick=document.location='http://localhost/myphp/'>Back</button>

</button>
</center>

</head>
</body>
</html>