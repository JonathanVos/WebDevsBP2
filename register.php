<?php
session_start();

if(!isset($_SESSION['username'])){
    $content='<h1>Registeren</h1>
        <h2>Vul uw gegevens in:</h2>
        <form class="blah" method="post" action="registerAccount.php">
            <table>
                <tr>
                    <th>Accountgegevens</th>
                    <th>Factuuradres</th>
                </tr>
                <tr>
                    <td>
                        Gebruikersnaam*<br>
                        <input type="text" name="username"><br>
                        Wachtwoord*<br>
                        <input type="text" name="password"><br>
                        Herhaal Wachtwoord*<br>
                        <input type="text"><br>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>Aanhef*<br>
                                    <select name=geslacht>
                                        <option value="M">Dhr.</option>
                                        <option value="V">Mvr.</option>
                                    </select>
                                </td>
                                <td>Voornaam<br><input type="text" name="voornaam"></td>
                                <td>Tussenv.<br><input type="text" name="tussenvoegsel"></td>
                                <td>Achternaam*<br><input type="text" name="achternaam"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3">Email*<br><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">Straatnaam*<br><input type="text" name="straatnaam"></td>
                                <td>Huisnummer*<br><input type="number" name="huisnummer"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="1">Postcode*<br><input type="text" size="6" name="postcode"></td>
                                <td colspan="2">Plaats*<br><input type="text" name="woonplaats"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3">Telefoon*<br><input type="number" name=telefoon></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <button type="submit">Opslaan</button>
        </form>';
}
else{
    $content="Je bent al ingelogd, knuppel!";
}

    require 'template.php';
?>