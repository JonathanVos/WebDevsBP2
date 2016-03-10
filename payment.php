<?php
$content = "";
require_once ('cartfunctions.php');
if(getCartCount() == 0){
    $content .= 'Er is niks om af te rekenen';
}
else{
    require_once ('database/productsDatabase.php');
    $cart = getCart();
    $totalSum = 0;

    foreach($cart as $item){
        $product = getProduct($item[0]);
        $totalPrice = $product['price'] * $item[1];
        $totalSum += $totalPrice;
        $content .= $product['product_name'].'('.$item[1].') - &euro;'.$totalPrice.'<br>';
    }

    $content .= 'Totaal: &euro;'.$totalSum;
}



require 'template.php';
?>