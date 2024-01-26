<?php
	include 'dbcon.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PARADISH Private Hospital</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="shortcut icon" href="img/fav-icon.svg" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.css"></script>

	<!--swipper css-->
	<link rel="stylesheet" type="text/css" href="css/swiper-bundle.min">
	<!--swiper js-->
	<script src="swiper-bundle.min.js"></script>
	

</head>
<body>
	<header>
		<div class="logo"><img src ="img/logo.png" width="25%" height="25%"></i></div>
		
		<nav class="navbar">
			<a href="index.html">home</a>
			<a href="About.html">about us</a>
			<a href="#">Bookings</a>
			<a href="contactus.html">contact us</a>
			<a href="login.php" class="btn">Admin only</a>
		</nav>

		<div class="manu-icons">
			<div id="menu-bar" class="fas fa-bars" onclick="openbox()"></div>
		</div>

	</header>

	<div class="appoiment">
		<h1 class="heading"><span>contact</span> us</h1>

		<div class="wrapper">
			<div class="image">
				<img src="img/p2.png" alt="">
			</div>

			
		</div>
		
		<div class="our-experts">
			<div class="expert-heading">
				<h1>Meet <span>our </span>Doctors</h1>
			</div>

		


			
			<div class="swiper mySwiper container">
				<div class="swiper-wrapper content">
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt4.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Emily</span>
								<span class="profession"> Obstetrics</span>
								<p><b>work on</b></p><p>Monday</p><p>8.30 AM - 11.30 AM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt2.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Natasha</span>
								<span class="profession"> Cardiology</span>
								<p><b>work on</b></p><p>Monday</p><p>11.00 AM - 1.30 PM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt5.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Jasmine</span>
								<span class="profession"> Infectious Diseases</span>
								<p><b>work on</b></p><p>Tuesday</p><p>9.30 AM - 11.30 AM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt6.png" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Maya</span>
								<span class="profession"> Dental</span>
								<p><b>work on</b></p><p>Tuesday</p><p>8.30 AM - 10.00 AM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt7.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Alexander</span>
								<span class="profession"> Orthopedic</span>
								<p><b>work on</b></p><p>Wednesday</p><p>12.00 AM- 1.30 PM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt8.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Olivia </span>
								<span class="profession"> Surgery</span>
								<p><b>work on</b></p><p>Tuesday</p><p>9.30 AM - 11.30 AM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt9.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Natalie</span>
								<span class="profession"> Psychiatry</span>
								<p><b>work on</b></p><p>Friday</p><p>9.30 AM - 11.30AM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt10.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Harper</span>
								<span class="profession"> Emergency</span>
								<p><b>work on</b></p><p>Thursday</p><p>11.30 AM - 1.00 PM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>
					<div class="swiper-slide card">
						<div class="card-content">
							<div class="image">
								<img src="img/dt3.jpg" alt="">

							</div>
							<div class="name-profession">
								<span class="name">Dr. Michal</span>
								<span class="profession"> Cardiology</span>
								<p><b>work on</b></p><p>Thursday</p><p>8.30AM - 11.30AM</p>
							</div>
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>

							</div>
							<div class="button">
								<a href="bookform.html" class="aboutMe"><button>Book Now</button></a>
								
							</div>
						</div>
					</div>

				</div>
				<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				
			</div>
			
			<div class="container">
				<h1><b>Doctors Schedule:</b></h1>
			</div>
			<table class="table">
  		<thead>
    	<tr>
	      <th scope="col">D_ID</th>
	      <th scope="col">Name</th>
	      <th scope="col">Specialization</th>
	      <th scope="col">Available_Days</th>
	      <th scope="col">Time</th>
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
			  		</tr>';  		
			  		}
			  	}



			?>
		




	
	<script src="script.js"></script>

	
	

</body>
	
	
</html>