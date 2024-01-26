<?php
include 'dbcon.php';

$id=$_GET['updateid'];
$sql="Select * from crud where D_id=$id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$specialization=$row['specialization'];
$available=$row['available_days'];
$time=$row['time'];

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$specialization=$_POST['specialization'];
	$available=$_POST['available'];
	$time=$_POST['time'];

	$sql="update crud set D_id=$id, name='$name', specialization='$specialization', available_days='$available', time= '$time' where D_id=$id";
	$result=mysqli_query($connection,$sql);
	if($result){
		//echo "Updated successfully..";
		header('location:display.php');
	}else{
		die(mysqli_error($connection));
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" href="css/adminform.css">
</head>
<body>
	<div class="container">
		<form  method="POST">
		<div class="form-group">
			<label>Name:</label>
			<input type="text" id="name" placeholder="Enter Name" name="name" value=<?php echo $name;?>/>

			<label>Specialization:</label>
			<input type="text" id="specialization" placeholder="Enter Specialization" name="specialization" value=<?php echo $specialization;?> required/>

			<label>Available Days:</label>
			<input type="text" id="available" placeholder="Enter Available Days" name="available" value=<?php echo $available;?> required/>

			<label>Time:</label>
			<input type="text" id="time" placeholder="Enter Time" name="time" value=<?php echo $time;?> required/>

			<button name="submit">Update</button>
		
	
</body>
</html>