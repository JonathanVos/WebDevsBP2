<?php
	session_start();

	if(!isset($_SESSION['username'])){
		echo "Je Moeder!";
	}

	else{
		$content = "Login success.";
		header('location:index.php');
	}
?>