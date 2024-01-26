<?php
	include 'dbcon.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Admin CRUD</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<button class="btn btn-primary my-5"><a href="admin.php" class="text-light">ADD NEW</a></button>
	</div>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">D_ID</th>
      <th scope="col">Name</th>
      <th scope="col">Specialization</th>
      <th scope="col">Available_Days</th>
      <th scope="col">Time</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	$sql="Select * from crud";
  	$result=mysqli_query($connection,$sql);
  	if($result){
  		while($row=mysqli_fetch_assoc($result)){
  			$id=$row["D_id"];
  			$name=$row["name"];
  			$specialization=$row["specialization"];
  			$available=$row["available_days"];
  			$time=$row["time"];
  			echo ' <tr>
  			<th scope="row">'.$id.'</th>
  			<td>'.$name.'</td>
  			<td>'.$specialization.'</td>
  			<td>'.$available.'</td>
  			<td>'.$time.'</td>
  			<td>
			<button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
			<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
			</td>
  		</tr>';  		
  		}
  	}



?>
	


  </tbody>
</table>
	
</body>
</html>