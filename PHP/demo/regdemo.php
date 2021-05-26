<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="styledemo.css" />
</head>
<body>
<?php
	require('dbdemo.php');
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$collegename = stripslashes($_REQUEST['collegename']);
		$collegename = mysqli_real_escape_string($con,$collegename);
		$trn_date = date("Y-m-d H:i:s"); 
        $query = "INSERT into `users` (username, collegename, trn_date) VALUES ('$username', '$collegename', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Registered successfully.</h3><br/>Click here to <a href='logindemo.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<label for="username">User name:</label><br>
<input type="text" name="username" placeholder="Username" required /><br><br>
<label for="cname">College name:</label><br>
<input type="text" name="collegename" placeholder="Collegename" required /><br><br><br>
<input type="submit" name="submit" value="Register"/>
</form>
<br><br>
</div>
<?php } ?>
</body>
</html>
