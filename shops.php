<!DOCTYPE html>
<html>
<head>
	<title>Tailor Shops</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="shops.css">
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

			<a href="#" class="navbar-brand"><i class="fas fa-user-tie"></i> TailorBD.com</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-nav-demo">
    
			<ul class="nav navbar-nav">
				<li><a href="Home.php">Home</a></li>
			  	<li class="active"><a href="shops.php">Tailor Shops</a></li>
			  	<li><a href="about.php">About</a></li>
			</ul>
	<?php
		session_start();
		ini_set('display_errors', 'Off');
	?>		

			<ul class="nav navbar-nav navbar-right">
				<li><a> Welcome<?php echo " ".$_SESSION['username']?></a></li>
				<li><a href="start.php" target="_blank">Logout <i class="fas fa-user"></i><hr></a></li>
			</ul>
		</div>
		</div>
	</nav>

	<div class="container">
		<form method="POST">
		<input id="search" name="search" type="text" placeholder="search area"><input class="btn btn-default btn-xf" type="submit" name="submit" value="Search">
		</form>

	<?php 
		include "database.php";
	?>
	<?php 
		$db = new database();
		if(isset($_POST['submit']))
		{
			$area = mysqli_real_escape_string($db->link , $_POST['search']);
			if($area == ""){}
			else
			{
				$query = "SELECT * FROM tailor WHERE Location = '$area'";
				$read = $db->select($query);
				$row = $read->fetch_assoc();
				$_SESSION['Shopname'] = $row['Shopname'];
				$_SESSION['Location'] = $row['Location'];
				$_SESSION['Lastname'] = $row['Lastname'];
				$_SESSION['Catagory'] = $row['Catagory'];
				$_SESSION['Contact'] = $row['Contact'];
				$_SESSION['OwnerPic'] = $row['OwnerPic'];
				$_SESSION['ShopPic'] = $row['ShopPic'];
				$_SESSION['PriceDetails'] = $row['PriceDetails'];
			}
		}
	?>

		<!-- jumbotron 1 -->
		<div class="jumbotron">
			<h1><i class="fab fa-black-tie"></i> Tailor Shops</h1>
			<p>Shops where you can visit by sitting at your home</p>
		</div>

		<div class="row">
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="raymond.php" target="_blank"><img src="./IMG/<?php if($row){echo $row['ShopPic'];} ?>"></a>
							<h2><?php echo $row['Shopname'];?></h2>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="topten.html" target="_blank"><img src="./IMG/topten1.jpg"></a>
							<h2>Top Ten</h2>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="dorjibari.html" target="_blank"><img src="./IMG/dorjibari.jpg"></a>
							<h2>Dorjibari</h2>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="sunmoon.html" target="_blank"><img src="./IMG/sunmoon.jpg"></a>
							<h2>Sunmoon</h2>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="belmonte.html" target="_blank"><img src="./IMG/belmonte.jpg"></a>
							<h2>Belmonte</h2>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="catseye.html" target="_blank"><img src="./IMG/catseye.png"></a>
							<h2>Cats Eye</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-2">
				<h2>Areas</h2>
				<p><a href="#" target="_blank">Uttara</a></p>
				<p><a href="#" target="_blank">Bashundhara</a></p>
				<p><a href="#" target="_blank">Gulshan</a></p>
				<p><a href="#" target="_blank">Banani</a></p>
				<p><a href="#" target="_blank">Mohammadpur</a></p>
				<p><a href="#" target="_blank">Mirpur</a></p>
				<p><a href="#" target="_blank">Dhanmondi</a></p>
				<p><a href="#" target="_blank">Farmgate</a></p>
				<p><a href="#" target="_blank">Shahabag</a></p>
				<p><a href="#" target="_blank">Kakrail</a></p>
				<p><a href="#" target="_blank">Elefent Road</a></p>
				<p><a href="#" target="_blank">Gulistan</a></p>
				<p><a href="#" target="_blank">Jatrabari</a></p>
				<p><a href="#" target="_blank">Malibag</a></p>
			</div>
		</div>
	</div>


	<!-- jumbotron -->
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-lg-4">
					<h4>TailorBD</h4>
					<p><a href="#">About Us</a></p>
					<p><a href="#">Contact Us</a></p>
					<p><a href="#">Jobs</a></p>
				</div>
				<div class="col-lg-4">
					<h4>Company Policy</h4>
					<p><a href="#">Terms and Condition</a></p>
					<p><a href="#">Privacy Policy</a></p>
				</div>
				<div class="col-lg-4">
					<h4>Support</h4>
					<p><a href="#">Troubleshooting</a></p>
					<p><a href="#">FAQ</a></p>
					<p><a href="#">Get Help</a></p>
				</div>
			</div>
		</div>
	</div>

	 <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button> 

	<!-- footer -->
	<div class="footer">
			<p>Follow us on Social Media</p>
			<div style="margin: 10px 0;">
				<p>
		    		<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
		    		<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
		    		<a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
		    		<a href="https://www.gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
			   	</p>
			</div>
			<p>Copyright <i class="far fa-copyright"></i> 2018 TailorBD.com. All rights reserved.</p>
			<p>All works are property of their respective owners and may not be used elsewhere without written permission.</p>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- scroll to top button -->
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		        document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0;
		    document.documentElement.scrollTop = 0;
		}
	</script>



</body>
</html>