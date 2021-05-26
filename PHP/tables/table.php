 <html>
<head>
<body>
<a href="http://localhost/tables/"><b><center>Home</b></center></a>
<h1><center>Output for Tables program</center></h1>
<center>
<?php
$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
$c=$_REQUEST['c'];
$d=$_REQUEST['d'];
$e=$_REQUEST['e'];
$total=$a+$b+$c+$d+$e;
$avg=($total/5);
echo "$a <br> $b <br> $c <br>  $d <br> $e ";
echo "$total <br> $avg";
if($a>=35 and $b>=35 and $c>=35 and $d>=35 and $e>=35)
{
	echo " The person is pass";
}
else
{
	echo "The person is fail";
}
?>
</center>
</body>
</head>
</html>