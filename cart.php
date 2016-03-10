<?php
require_once ('cartfunctions.php');

$content = '';

$count = getCartCount();
if($count == 0){
    $content .= 'Winkelwagen is leeg';
}
else{
    $content .= '

      <h1>Winkelwagen</h1>
      <a href="carthandler.php?clear=true">Maak leeg</a>
      <table>
        <tr>
          <th></th>
          <th>Product naam</th>
          <th>Prijs</th>
          <th>Aantal</th>
          <th>Subtotaal</th>
          <th>Verwijder</th>
        </tr>';

    $cart  = getCart();
    foreach($cart as $item){
        $content .= getCartItemHtml($item);
    }

    $content .= '</table>';
    $content .= '<a href="payment.php">Afrekenen</a>';
}



require 'template.php';
?>