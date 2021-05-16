	<html>
	<?php session_start();
	if ($_SESSION['auth']!='YES') {
		header('location:index.php');
	}else{echo "Login successful";
      } 
	?>

	<form action="../Backend/logout.php" method="POST">
		<input type="submit" name="LOGOUT" value="logout">
	</form>

	<?php
		include ("../Backend/db.php");
		$query1= "SELECT products.*, product_color.color, product_price.price FROM `product_color` JOIN `products` ON product_color.color_id= products.product_id 
		JOIN `product_price` ON product_price.price_id= products.product_id;";
		$result1= mysqli_query($db, $query1);
		while($row= mysqli_fetch_assoc($result1)){
		    echo "<br><br>". $row['product_name']."<br><br>";
	}
	?>

	</html>