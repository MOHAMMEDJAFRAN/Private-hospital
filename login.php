<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<form action="authontication.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET["error"])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p> 

		<?php } ?>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name">

		<label>Password</label>
		<input type="password" name="password" placeholder="Password">

		<button type="submit">Login</button>
	</form>
	
</body>
</html>