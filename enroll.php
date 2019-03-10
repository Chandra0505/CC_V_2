<?php
	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	require './functions/config.php';
	require './admin/session.php';
	
//	session_start();

if(isset($_SESSION['email'])){
		header("location:predash.php");
//		header("location:./admin/index.php");
	}
else{
	header("location:login.php");
}
?>