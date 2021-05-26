<?php
require('dbdemo.php');

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['project'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`project`,`submittedby`) values ('$trn_date','$name','$project','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='viewdemo.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="styledemo.css" />
</head>
<body>
<div class="form">
<p><a href="viewdemo.php">View Records</a>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="project" placeholder="project" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />
</div>
</div>
</body>
</html>
