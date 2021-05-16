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
		<title>PRODUCTS</title>
	</head>
<body>
	<?php session_start();
		if ($_SESSION['auth']!='YES') {
			header('location:index.php');
		}else{echo "You are logged in.";
	      } 
	?>



	
	<br><br><br>
	     <div class="row">
	        <div class="col-md-9 mx-auto">
		        <form action="../Backend/logout.php" method="POST">
				<input type="submit" name="LOGOUT" value="logout"><br><br>
				
				</form>
	        </div>
	       </div>
	    <div class="container">

	    	
	      <div class="row">
		        
		       <div class="col-sm-8">
			       	<table class="table table-hover">
			       		<thead>
			       			<th>ID</th>
			       			<th>PRODUCT NAME</th>
			       			<th>DESCRIPTION</th>
			       			
			       		</thead>
			       		<tbody>
			       			<tr>

			       			<?php
								include ("../Backend/db.php");
								$query= "SELECT *FROM products";
								$result= $db->query($query);
								
								while($row= $result->fetch_assoc()){ ?>
									<td><?= $row['id'];?></td>
									<td><?= $row['product_name'];?></td>
									<td><?= $row['description'];?></td>
									
								    
		                        <?php echo "</tr>"; } ?>
	                        

			       		</tbody>
			       		
			       	</table>
		       </div>
	       </div>
	   </div>
   </body>
</html>