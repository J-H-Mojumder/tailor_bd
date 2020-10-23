<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/buy_sell.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="dropdown-content">
		<h1>LOGIN</h1>
	<form action="" method="POST">
		<p><input id="username" name="username" type="text" placeholder="Username"></p>
	<p><input id="email" name="email" type="email" placeholder="E-mail address"></p>
	<p><input id="password" name="password" type="password" placeholder="Password"></p>
	<p>
		Role:
		<select class="role" name="role">
			<option value="tailor">Member</option>
			<option value="customer">Admin</option>
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
</body>
</html>