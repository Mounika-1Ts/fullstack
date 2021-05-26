<html>
<head>
<h1><center>Result</center></h1
<br><br><br>
</head>
<body><center>
<?php
$distance=$_REQUEST['distance'];
$speed=$_REQUEST['speed'];
echo "<b>Distance of vehicle:</b>$distance km<br><br>";
echo "<b>Speed of vehicle:</b>$speed  km<br><br>";
$hour=$distance/$speed;
echo "<b>The time it took the vehicle to reach the destination:</b>$hour hr";
?><br><br><br>
<a href="http://localhost/kmtohr/">Home</a>
</body>
</html>