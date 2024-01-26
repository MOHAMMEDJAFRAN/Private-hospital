<?php

require_once("dbcon.php");

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$sql="INSERT INTO contactus(name, email, message) VALUES('$name','$email','$message')";
$result=mysqli_query($connection,$sql);
if($result)
{
	print "Submit Successful..";
?>

<?php
}
?>

