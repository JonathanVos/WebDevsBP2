<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/9/2016
 * Time: 10:16
 */
require_once ('cartfunctions.php');
?>


<div class="cart">
    <img src="img/cart.jpg" alt="cart" width="30" height="25"/>
    <a href="cart.php">Winkelwagen (<?php echo getCartCount() ?>)</a>
</div>
