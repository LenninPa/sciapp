<?php 
	session_start();

	$sessvar = $_SESSION['username'];

	if ($sessvar == null || $sessvar == '') {
		echo 'sin autorizacion';
		
		die();

	}
	session_destroy();
	header("LOCATION:../index.php");

 ?>