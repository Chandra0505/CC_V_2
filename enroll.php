<?php
	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	require './functions/config.php';
//	require './admin/session.php';
	
	session_start();

if(isset($_SESSION['email'])){
//		$a = $_SESSION["e_name"] = $_SESSION["name"];
//		$b = $_SESSION["e_price"] = $_SESSION["price"];
//
//
//		$sql = "INSERT INTO enroll_course (e_name, e_image)
//		VALUES ('$a', '$b')";
//
//
//		if ($conn->query($sql) === TRUE) {
//			echo "New record created successfully";
//		} 
//		else {
//			echo "Error: " . $sql . "<br>" . $conn->error;
//		}
		header("location:predash.php");
//		header("location:./admin/index.php");
	}
else{
	header("location:login.php");
}
?>