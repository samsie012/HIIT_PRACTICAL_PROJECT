		<?php

	if(isset($_POST['LOGIN'])){
		    $email= $_POST['email'];
		    $password= $_POST["password"];

		if(empty($email)){
		    echo "Please enter an email address";
		}elseif(empty($password)){
		    echo "Please enter your password";

		}else{ 
			session_unset();
			session_start();
			include "db.php";
			$query="SELECT `password` FROM employees where email ='$email'";
            $result=mysqli_query($db, $query);
			$row= $result->fetch_assoc();
			$rowA = $row["password"];
    
          if($rowA!=$password){
           header('location:../Frontend/index.php');
          }else{

				$_SESSION['auth']= 'YES';

			     header('location:../Frontend/products.php');
			}
		}
	}

		?>