
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="styledemo.css" />
</head>
<body>
<?php
	require('dbdemo.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username);
		$collegename = stripslashes($_REQUEST['collegename']);
		$collegename = mysqli_real_escape_string($con,$collegename);
        $query = "SELECT * FROM `college` WHERE username='$username' and collegename='collegename'";
		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
            }else{
				echo "<div class='form'><h3>Username incorrect.</h3><br/>Click here to <a href='logindemo.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br><br>
<input type="text" name="collegename" placeholder="collegename" required /><br><br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='regdemo.php'>Register Here</a></p>

<br /><br />
</div>
<?php } ?>


</body>
</html>
