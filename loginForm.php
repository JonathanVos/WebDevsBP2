
<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}
if(!isset($_SESSION['username'])){
    echo '      <form class="login" method="post" action="checkLogin.php">
            <fieldset>
              <legend>Log in</legend>
              <input type="text" name="username" value="Naam" size="14" />
              <input type="password" name="password" value="Wachtwoord" size="14" /><br />
              <input type="checkbox" name="remember" id="remember" value="Onthouden" checked="checked" />
              <label for="remember">Onthouden</label>
              <a href="forgotPassword.php">Vergeten?</a>
              <a href="register.php">Registreer</a>
              <input type="submit" value="Log in" />
            </fieldset>
          </form>';
}
else{
    echo '      <form class="login" method="post" action="log_out.php">
            <fieldset>
              <legend>Hallo '.$_SESSION['username'].'</legend>
              <a href="details.php">Gegevens</a><br />
              <input type="submit" value="Log out" />
            </fieldset>
          </form>';
}

?>