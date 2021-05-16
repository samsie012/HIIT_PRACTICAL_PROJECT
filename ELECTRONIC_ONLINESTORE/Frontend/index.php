<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
	  <meta name="author" content="Sahil Kumar">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="asset_css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="asset_css/dataTables.bootstrap4.min.css" />

	  <!-- jQuery library -->
	  <script src="asset_js/jquery.min.js"></script>
	  <!-- Popper JS -->
	  <script src="asset_js/popper.min.js"></script>
	  <!-- Latest compiled JavaScript -->
	  <script src="asset_js/bootstrap.min.js"></script>

	  <script type="text/javascript" src="asset_js/jquery.dataTables.min.js"></script>
	  <script type="text/javascript" src="asset_js/dataTables.bootstrap4.min.js"></script>
		<title>LOGIN</title>
	</head>
<body>
	<div class="container">
		<div class="col-sm-6 mx-auto">
			<br><br><br>
			<h2>LOGIN PAGE</h2>
			<form action="../Backend/login.php" method= "POST">
			<label for="email"> Email/Username</label>
			<input type="text" name= 'email' class="form-control" > <br> <br>
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" >
			<br>
			<input type="submit" name="LOGIN" class="btn-primary">
			</form>
		</div>
	</div>



</body>
</html>