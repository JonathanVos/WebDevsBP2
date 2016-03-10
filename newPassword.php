<?php
session_start();

if(isset($_SESSION['username'])){
	$connection_info = array("Database"=>"WebShop", "UID"=>"sa", "PWD"=>"a");
	$link = sqlsrv_connect("USER\SQLEXPRESS", $connection_info);
	if(!$link){
		echo "FATAL: Connection failed.";
		die ("Bleargh!");
	}
	echo "Connection Success!\n";

	$username = $_POST['username'];
	$oldPassword = hash("sha256", $_POST['oldPassword']);
	$newPassword = hash("sha256", $_POST['newPassword']);

	echo "$username $newPassword\n";

	$sql = "SELECT COUNT(*) 
			AS 'count' 
			FROM Gebruikers 
			WHERE gebruikersnaam COLLATE Latin1_General_CS_AS='$username' 
				and wachtwoord COLLATE Latin1_General_CS_AS='$oldPassword'";

	$result = sqlsrv_query($link, $sql, null, null);
	$waarde = sqlsrv_fetch_array($result)['count'];
	if($waarde == 1){
		$sql="UPDATE Gebruikers SET wachtwoord='$newPassword' WHERE gebruikersnaam='$username'";
		$result=sqlsrv_query($link, $sql, null, null);

		if($result){
			echo "Yay!";
		}
		else{
			echo "De databaas faalde!";
		}
	}else{
		echo "Booh!\n";
	}

	sqlsrv_close($link);
}
else{

}
?>