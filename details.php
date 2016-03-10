<?php
session_start();

if(isset($_SESSION['username'])){

	// get stuff from database
	$username = $_SESSION['username'];
	$geslacht = 'M';
	$voornaam = 'Jonathan';
	$tussenvoegsel = '';
	$achternaam = 'Vos';
	$email = 'jonathan.vos@hotmail.com';
	$straatnaam = 'Heemraadstraat';
	$huisnummer = '6';
	$postcode = '6525TH';
	$woonplaats = 'Nijmegen';
	$telefoon = '0643952455';

	function selectGeslacht($gevraagdGeslacht, $geslacht){
		if($geslacht === $gevraagdGeslacht){
			return 'selected="selected"';
		}
		else{
			return '';
		}
	}

	$content='<h1>Uw gegevens</h1>
    <table>
        <tr>
            <th>Accountgegevens</th>
            <th>Factuuradres</th>
        </tr>
        <tr>
            <td>
            	<form method="post" action="newPassword.php">
                    Gebruikersnaam<br>
                    <input type="text" name="username" value="'.$username.'" readonly="readonly"><br>
                    Oud wachtwoord*<br>
                    <input type="password" name="oldPassword"><br>
                    Nieuw wachtwoord*<br>
                    <input type="text" name="password"><br>
                    Herhaal nieuw wachtwoord*<br>
                    <input type="text"><br>
                    <button type="submit">Nieuw wachtwoord</button>
                </form>
            </td>
            <td>
                <table>
                	<form method="post" action="newAddress.php">
                        <tr>
                            <td>Aanhef*<br>
                                <select name="geslacht">
                                    <option value="M"'.selectGeslacht('M', $geslacht).'>Dhr.</option>
                                    <option value="V"'.selectGeslacht('V', $geslacht).'>Mvr.</option>
                                </select>
                            </td>
                            <td>Voornaam*<br><input type="text" name="voornaam" value="'.$voornaam.'"></td>
                            <td>Tussenv.<br><input type="text" name="tussenvoegsel" value="'.$tussenvoegsel.'"></td>
                            <td>Achternaam*<br><input type="text" name="achternaam" value="'.$achternaam.'"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">Email*<br><input type="text" name="email" value="'.$email.'"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Straatnaam*<br><input type="text" name="straatnaam" value="'.$straatnaam.'"></td>
                            <td colspan="2">Huisnummer*<br><input type="number" name="huisnummer" value="'.$huisnummer.'"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="1">Postcode*<br><input type="text" size="6" name="postcode" value="'.$postcode.'"></td>
                            <td colspan="2">Plaats*<br><input type="text" name="woonplaats" value="'.$woonplaats.'"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Telefoon*<br><input type="number" name=telefoon value="'.$telefoon.'"></td>
                            <td><button type="submit">Nieuw factuuradres</button></td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table>';
}
else{
	$content="You are not supposed to be here.";
}
require 'template.php';
?>