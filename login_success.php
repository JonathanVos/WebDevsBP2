<?php
	session_start();

	if(!isset($_SESSION['username'])){
		echo "Je Moeder!";
	}

	else{
		header('location:index.php');
	}
?>