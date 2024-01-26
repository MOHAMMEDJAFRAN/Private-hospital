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
		<form action="insert.php" method="POST">
		<div class="form-group">
			<label>Name:</label>
			<input type="text" id="name" placeholder="Enter Name" name="name" required/>

			<label>Specialization:</label>
			<input type="text" id="specialization" placeholder="Enter Specialization" name="specialization" required/>

			<label>Available Days:</label>
			<input type="text" id="available" placeholder="Enter Available Days" name="available" required/>

			<label>Time:</label>
			<input type="text" id="time" placeholder="Enter Time" name="time" required/>

			<button name="submit">submit</button>
		
	
</body>
</html>