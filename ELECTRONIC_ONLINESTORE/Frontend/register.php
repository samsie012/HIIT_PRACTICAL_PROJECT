<!DOCTYPE html>
<html>
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
		<title>REGISTER</title>
	</head>
<body>
	



	<br><br><br>
	     <div class="row">
	        
	       </div>
				
			<div class="col-md-10">
				<!-- Status messages-->
				<?php
				session_start();
				if (isset($_SESSION['status_succ1'])) {
						echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Congratulations! Your registration is successful!</strong> 
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>';
						
					unset($_SESSION['status_succ1']);
				}
			?>

			</div>
	    <div class="container">

	    	
	      <div class="row">
		  <div class="col-sm-6 mx-auto">

			
					<h2>REGISTER</h2>
					<?php 
					
                        include ("../Backend/action.php");
					?>
					<form action="" method="POST">
						<div class="form-group">
							<label>Employee Name</label>
					     <input type="text" name="employeename" class="form-control" required value= "" >
						</div>
						<label>Employee email</label>
						<input type="text" name="email" class="form-control" value=" " required="">
				        <label>Employee role</label>
						<input type="text" name="employeerole" class="form-control" value="" required>
						<label>Employee phone</label>
						<input type="text" name="employeephone" class="form-control" value="" required>
						<label>Employee password</label>
						<input type="password" name="employeepassword" required class="form-control" value="" ><br>
                    
                        <input type="submit" name="register" value="REGISTER" class="btn-primary" required>
                       

						
					</form>
		       </div>
		   
		       </div>
	       </div>
	   </div>
   </body>
</html>