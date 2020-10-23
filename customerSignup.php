<head>
	<title>Customer SignUp</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="customerSignup.css">
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
				<li><a href="start.php">Home</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<div class="dropdown">
					<a href="#">Login <i class="fas fa-user"></i><hr></a>
    					<div class="dropdown-content">
   							<h5>LOGIN</h5>
   							<form action="" method="POST">
   							<p><input id="username" name="username" type="text" placeholder="username"></p>
							<p><input id="email" name="email" type="email" placeholder="E-mail address"></p>
							<p><input id="password" name="password" type="password" placeholder="Password"></p>
							<p>
								Role:
								<select class="role" name="role">
									<option value="tailor">Tailor</option>
									<option value="customer">Customer</option>
								</select>
							</p>
							<p>
								<div class="go">
									<input class="btn btn-success btn-sm" type="submit" name="Submit" value="LOGIN">
								</div>
							</p>
						</form>

							<p><a href="http://www.facebook.com" class="btn btn-primary btn-md" target="_blank"><i class="fab fa-facebook-f"></i>  Login with Facebook</a></p>
							<p><a href="http://www.google.com" class="btn btn-info btn-md" target="_blank"><i class="fab fa-google"></i>  Login with Google</a></p>
							<p><a href="forgotpass.html" class="new" target="_blank">Forgot Password?</a></p>
							<p>Are you new?</p>
							<p><a href="customerSignup.php" class="new" target="_blank">Click here for signup as a Customer</a></p>
							<p><a href="tailorSignup.php" class="new" target="_blank">Click here for signup as a Tailor</a></p>
  						</div>
				</div>
			</ul>
		</div>
		</div>
	</nav>

	<!-- body -->
	<div class="container">
		<h1>Hi! Let's Get Started</h1>
		<hr>
		<h3>Finding Tailor Shops have never been easier! We will get you started to find your favorite tailor shops in less than a minute!</h3>

		<h3>First, let's get to know each other...</h3>
		<p><a href="http://www.facebook.com" class="btn btn-primary btn-lg"><i class="fab fa-facebook-f"></i>  Create an account using Facebook</a></p>
		<p><a href="http://www.google.com" class="btn btn-default btn-lg"><i class="fab fa-google"></i>  Create an account using Google</a></p>

		<h3>Or</h3>

	<?php
		include "database.php";
	?>

	<?php
		$db = new database();
		if(isset($_POST['Submit']))
		{
		 	 $Firstname = mysqli_real_escape_string($db->link , $_POST['Firstname']);
			 $Lastname = mysqli_real_escape_string($db->link , $_POST['Lastname']);
			 $Email = mysqli_real_escape_string($db->link , $_POST['Email']);
			 $Password = mysqli_real_escape_string($db->link , $_POST['Password']);
			 $ConfirmPassword = mysqli_real_escape_string($db->link , $_POST['ConfirmPassword']);
			 $Day = $_POST['Day'];
			 $Month = $_POST['Month'];
			 $Year = $_POST['Year'];
			 $Gender = $_POST['Gender'];
			 if($Firstname == "" || $Lastname == "" || $Email == "" || $Password == "" || $Gender == "" || $Day == "" || $Month == "" || $Year == "")
			 {
			 	$error = "Field must not be empty !!";
			 }
			 else
			 {
			 	if($Password == $ConfirmPassword)
			 	{
		 			$query = "INSERT INTO customer(Firstname,Lastname,Email,Password,Day,Month,Year,Gender) Values('$Firstname','$Lastname','$Email','$Password','$Day','$Month','$Year','$Gender')";
					$create = $db->insert($query);
				}
				else
				{
					echo "Passwords didn't match!!";
				}
		 	}
		}
	?>

		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 form">
				<form action="" method="post">
				<p>
					<label for="FirstName">First Name:</label>
					<input id="FirstName" name="Firstname" type="text" placeholder="FirstName" required>
				</p>
				<p>
					<label for="LastName">Last Name:</label>
					<input id="LastName" name="Lastname" type="text" placeholder="LastName" required>
				</p>

				<!-- email-password -->
				<p>
					<label for="Email">Email:</label>
					<input id="Email" name="Email" type="email" placeholder="Email" required>
				</p>
				<p>
					<label for="Password">Password:</label>
					<input id="Password" name="Password" type="password" placeholder="5 to 10 characters" minlength="5" maxlength="10" required>
				</p>
				<p>
					<label for="ConfirmPassword">Confirm Password:</label>
					<input id="ConfirmPassword" name="ConfirmPassword" type="password" placeholder="5 to 10 characters" minlength="5" maxlength="10" required>
				</p>

				<!-- date of birth -->
				<p>
					Birthday:
					<select name="Month">
						<option value="Jan">Jan</option>
						<option value="Feb">Feb</option>
						<option value="Mar">Mar</option>
						<option value="Apr">Apr</option>
						<option value="May">May</option>
						<option value="Jun">Jun</option>
						<option value="Jul">Jul</option>
						<option value="Aug">Aug</option>
						<option value="Sep">Sep</option>
						<option value="Oct">Oct</option>
						<option value="Nov">Nov</option>
						<option value="Dec">Dec</option>	
					</select>

					<select name="Day">
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
						<option value="06">6</option>
						<option value="07">7</option>
						<option value="08">8</option>
						<option value="09">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>

					<select name="Year">
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
					</select>
				</p>

				<p>
					<label for="Male">Male:</label>
					<input name="Gender" id="Male" type="radio" value="MALE">
					<label for="Female">Female:</label>
					<input name="Gender" id="Female" type="radio" value="FEMALE">
					<label for="Other">Other:</label>
					<input name="Gender" id="Other" type="radio" value="OTHER">
				</p>


				<p>
					<input type="checkbox" required="">
					I agree to the terms and conditions
				</p>

				<div class="go">
					<input class="btn btn-success btn-lg" type="submit" name="Submit" value="Create account">
				</div>

			</form>
			</div>
			<div class="col-sm-4"></div>
						
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