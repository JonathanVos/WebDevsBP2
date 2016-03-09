<?php

function isBaseName($name){
    $html = 'href="'.$name.'"';

    $baseName = basename($_SERVER['PHP_SELF']);
    if($baseName == $name){
        $html .= ' class="active"';

    }
    return $html;
}
?>
<nav>
    <ul>
        <li><a  <?php echo isBaseName("index.php")?> >Nieuws</a></li>
        <li><a <?php echo isBaseName("sale.php")?>>Acties</a></li>
        <li><a <?php echo isBaseName("about.php")?> >Over ons</a></li>
        <li><a <?php echo isBaseName("vacancies.php")?> >Vacatures</a></li>
        <li ><a href="shop.php">WebShop</a>
            <ul>
                <li><a <?php echo isBaseName("shop.php")?> >Producten</a></li>
                <li><a <?php echo isBaseName("cart.php")?> >Winkelwagen</a></li>
                <li><a <?php echo isBaseName("payment.php")?> >Afrekenen</a></li>
            </ul>
        </li>
    </ul>
</nav>

