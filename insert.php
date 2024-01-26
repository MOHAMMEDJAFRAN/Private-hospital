<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$specialization=$_POST['specialization'];
	$available=$_POST['available'];
	$time=$_POST['time'];

	$sql="insert into crud(name,specialization,available_days,time) values('$name','$specialization','$available','$time')";
	$result=mysqli_query($connection,$sql);
	if($result){
		//echo "Data inserted successfully..";
		header('location:display.php');
	}else{
		die(mysqli_error($connection));
	}
}