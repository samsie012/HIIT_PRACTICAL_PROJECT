<?php 
            $employeename="";
			$email="";
			$password="";
			$phone="";
			$role="";


 
	
	
		include ("db.php");

	if (isset($_POST['register'])) {

	   	$employeename=$_POST['employeename'];
		$employeeemail=$_POST['email'];
		$employeerole=$_POST['employeerole'];
		$employeephone=$_POST['employeephone'];
		$employeepassword=$_POST['employeepassword'];
		$query = "INSERT  INTO employees(employee_name,email,phone,role,password) VALUES(?,?,?,?,?)";
		$stm= $db->prepare($query);
		$stm->bind_param("sssss",$employeename,$employeeemail,$employeephone,$employeerole,$employeepassword);
		$stm->execute();

		if ($stm) {
		 $_SESSION['status_succ1']= "msg";
	      header('location:../Frontend/register.php');
	    }else{
	    	$_SESSION['status_err']= "An error occured, please try again";
	    }
	}

    

 ?>