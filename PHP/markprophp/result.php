<DOCTYPE html>
<html>
<head>
<center><h1><u>RESULT</u></h1></center><br><br><br>
</head>
<body>
<center>
<?php 
$tamil=$_REQUEST['tamil'];
$english=$_REQUEST['english'];
$maths=$_REQUEST['maths'];
$science=$_REQUEST['science'];
$SS=$_REQUEST['SS'];
echo "Tamil mark=$tamil<br><br><br>English mark=$english<br><br><br>Maths mark=$maths
<br><br><br>Science mark=$science<br><br><br>Social Science mark=$SS";
$total=$tamil+$english+$maths+$science+$SS;
echo "<br><br>Total=$total";
$avg=$total/5;
echo "<br><br>Average=$avg";
?><br><br><br><br>
<button onclick=document.location='http://localhost/markprophp/'>Back</button>
</center>
</body>
</html>