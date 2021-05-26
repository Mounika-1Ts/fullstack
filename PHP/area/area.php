<html>
<head>
<h1><center>Area of Rectangle</center></h1><br><br><br>
<body><center>


<?php
$l=$_REQUEST['l'];
$b=$_REQUEST['b'];
echo "Length of Rectangle:$l<br><br><br>";
echo "Breadth of Rectangle:$b<br><br><br>";
$area=$l*$b;
echo "Area of Rectangle:$area";
?><br><br>
<table style="width:100%">
  <tr>
    <th>Length of Rect</th>
    <th>Breath of Rect</th> 
    <th>Area of rect</th>
  </tr>
  <tr>
    <td><?php echo $l;?></td>
    <td><?php echo $b;?></td>
    <td><?php echo $area;?></td>
  </tr>
  
</table>

<button onclick=document.location='http://localhost/area/'>Home</button>
</center>
</body>
</head>
</html>