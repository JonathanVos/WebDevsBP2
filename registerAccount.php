<?php
/**
  * To-do:
  * check tweede wachtwoord
  */

$username=$_POST['username'];
$password=hash("sha256", $_POST['password']);
$voornaam=$_POST['voornaam'];
$tussenvoegsel=$_POST['tussenvoegsel'];
$achternaam=$_POST['achternaam'];
$straatnaam=$_POST['straatnaam'];
$huisnummer=$_POST['huisnummer'];
$postcode=$_POST['postcode'];
$woonplaats=$_POST['woonplaats'];
$email=$_POST['email'];
$geslacht=$_POST['geslacht'];

require_once ('database/connectDatabase.php');
$link = getConnection();
if(!$link){
	echo "FATAL: Connection failed.";
	die ("Bleargh!");
}
echo 'Connection Success!/n';

$sql="INSERT INTO Gebruikers VALUES ('$username', '$voornaam', '$tussenvoegsel', '$achternaam', '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$email', '$geslacht', '$password')";
$result=sqlsrv_query($link, $sql, null, null);
if($result){
	header("location:registerSuccess.php");
}
else{
	echo "Fail";
	echo "$username $password $voornaam $tussenvoegsel $achternaam $straatnaam $huisnummer $postcode $woonplaats $email $geslacht";
	print_r(sqlsrv_errors());
	//header("location:registerFail.php");
}
?>