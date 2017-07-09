<?php 
	session_start();
	require_once("../../includes/database.php");
	if (!isset($_SESSION["id"])) {
		echo "<script>alert('Please Log In first');</script>";
		$database->redirect_to("../index.php");
	}
 ?>