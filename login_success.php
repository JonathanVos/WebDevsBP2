<?php
	session_start();

	if(!isset($_SESSION['username'])){
		echo "Je Moeder!";
	}

	else{
		$username = $_SESSION['username'];
		header('location:index.php');
	}
?>