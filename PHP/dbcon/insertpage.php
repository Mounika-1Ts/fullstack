
<?php
$conn=mysqli_connect("localhost","root","","resume");
if(!$conn){
	die ('Connection failed'
	.mysqli_connect_error());
}
$name=$_REQUEST['name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
$acadamic_details = $_REQUEST['acadamic_details'];
$project = $_REQUEST['project'];
$field_of_interest = $_REQUEST['field_of_interest'];

$sql="INSERT INTO details VALUES ('$name','$address','$email','$acadamic_details','$project','$field_of_interest')";

if(mysqli_query($conn,$sql)){
	echo("<h2>Data stored successfully</h2>");
echo nl2br("\n$name \n$address \n$email \n$acadamic_details
\n$project \n$field_of_interest");
}
else
{
echo ('ERROR= sorry! $sql.'
.mysqli_error($conn));
}
mysqli_close($conn);
?>
