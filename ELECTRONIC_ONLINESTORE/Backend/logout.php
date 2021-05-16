<?php session_start();
if (isset($_POST['LOGOUT'])) {
	session_unset();
session_destroy();
header('location:../Frontend/index.php');
}

 ?>