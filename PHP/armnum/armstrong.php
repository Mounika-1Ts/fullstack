<html>
<head><center><h1>RESULT</h1></center><br><br><br>
</head>
<body><center>
<?php
$n=$_REQUEST['n'];
$total=0;
$num=$n;
while($num!=0)
{
	$rem=$num%10;
	$total=$total+($rem*$rem*$rem);
	$num=$num/10;
}
if($n==$total)
{
	echo "The given number is an Armstrong";
}
else
{
	echo "The given number is not an Armstrong";
}
	
?>
</center>
</body>
</html>