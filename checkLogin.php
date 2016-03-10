<?php
session_start();

$connection_info = array("Database"=>"WebShop", "UID"=>"sa", "PWD"=>"a");
$link = sqlsrv_connect("USER\SQLEXPRESS", $connection_info);
if(!$link){
	echo "FATAL: Connection failed.";
	die ("Bleargh!");
}
echo "Connection Success!\n";

$username = $_POST['username'];
$password = hash("sha256", $_POST['password']);

echo "$username $password\n";

$sql = "SELECT COUNT(*) 
		AS 'count' 
		FROM Gebruikers 
		WHERE gebruikersnaam COLLATE Latin1_General_CS_AS='$username' 
			and wachtwoord COLLATE Latin1_General_CS_AS='$password'";

$result = sqlsrv_query($link, $sql, null, null);
$waarde = sqlsrv_fetch_array($result)['count'];
if($waarde == 1){
	$_SESSION['username'] = $username;
	header('location:login_success.php');
}else{
	header('location:loginFail.php');
}

sqlsrv_close($link);
?>