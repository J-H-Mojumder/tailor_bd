<!DOCTYPE html>
<html>
<?php include "database.php"; ?>
<?php session_start(); ?>
<?php 

	class shop
	{
		public $ShopName;
		public $Catagory;
		public $Contact;
		function __construct()
		{
			$ShopName = $_SESSION['Shopname'];
			$Catagory = $_SESSION['Catagory'];
			$Contact = $_SESSION['Contact'];
		}
	}
	class branch extends shop
	{
		public $branch1;
		public $branch2;
		function __construct()
		{
			$branch1 = "Kataban";
			$branch2 = "Gulshan";
		}
	}
 ?>
	<?php 
		$obj = new branch();
	?>
<head>
	<title><?php echo "".$_SESSION['Shopname'] ?></title>
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
				<li><a href="Home.php" target="_blank">Home</a></li>
			  	<li><a href="shops.php" target="_blank">Tailor Shops</a></li>
			  	<li><a href="about.php" target="_blank">About</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Welcome <?php echo " ".$_SESSION['username'] ?></a></li>
				<li><a href="start.php" target="_blank">Logout <i class="fas fa-user"></i><hr></a></li>
			</ul>
		</div>
		</div>
	</nav>

	<!-- body -->
	<div class="container">
		<h1>Welcome to <?php echo " ".$_SESSION['Shopname'] ?></h1>
		<div class="row">
			<div class="col-lg-12">
				<div id="slider" class="carousel slide" data-ride="carousel">
					<!-- indicators dot nav -->
					<ol class="carousel-indicators">
						<li data-target="#slider" data-slide-to="0" class="active"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
					</ol>

					<!-- wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="./IMG/raymond3.jpg">
						</div>
						<div class="item">
							<img src="./IMG/<?php echo $_SESSION['ShopPic']; ?>">
						</div>
					<div class="item">
							<img src="./IMG/raymond4.jpg">
						</div>
					</div>

					<!-- controls or next and prev buttons -->
					<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#slider" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>


	<!-- shop detail -->
	<div class="container">
		<div class="row">
			<!-- branches -->
			<div class="col-sm-8">
				<p><h2>Name: <?php echo $_SESSION['Shopname'] ?></h2></p>
				<p><h2>Catagory: <?php echo $_SESSION['Catagory'] ?></h2></p>
				<p><h2>Contact: <?php echo $_SESSION['Contact'] ?></h2></p>
				<p><h2>Price Details :</h2></head></p><br>
				<img src="./IMG/<?php echo $_SESSION['PriceDetails'] ?>">
				<p><h2>Branches:</h2></p>
				<div class="row">
					<div class="col-sm-6">
            			<div class="thumbnail">
            				<div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=raymond%20banani&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:400px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:300px;}</style></div>
            				<h2><?php echo $obj->branch1; ?></h2>
           				</div>
           			</div>
					<div class="col-sm-6">
	            			<div class="thumbnail">
	            				<div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=raymond&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:400px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:300px;}</style></div>
	            				<h2><?php echo $obj->branch2; ?></h2>
	           				</div>
	           			</div>
					</div>
			</div>

			<!-- profile card -->
			<div class="col-sm-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); max-width: 300px; margin-top: 15%; text-align: center; background-color: #4A2A82;">
				<h1>Admin</h1>
				<div class="card">
				 	<img src="./IMG/<?php echo $_SESSION['OwnerPic'] ?>" alt="John" style="width:100%">
				 	<h1>Mr. <?php echo $_SESSION['Lastname'] ?></h1>
				  	<p style="color: grey; font-size: 18px;">CEO & Founder</p>
				  	<p style="color: grey; font-size: 18px;"><?php echo $_SESSION['Shopname'] ?></p>
				  	<div style="margin: 20px 0;">
				    	<p style="font-size: 22px;">
				    		<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
				    		<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
				    		<a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
				    		<a href="https://www.gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
				    	</p>
					</div>
				 	<p><button style="border: none; outline: 0; display: inline-block; padding: 8px; color: white; background-color: #000; text-align: center; cursor: pointer; width: 100%; font-size: 18px;">Contact</button></p>
				</div>
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