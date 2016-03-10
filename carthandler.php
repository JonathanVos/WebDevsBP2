<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/9/2016
 * Time: 10:55
 */
require_once ('cartfunctions.php');

if(isset($_POST['product_id']) && ctype_digit(strval($_POST['product_id']))){
    $lastPage = basename($_SERVER['HTTP_REFERER']);
    $productId = (int)$_POST['product_id'];

    $count = 1;
    if(isset($_POST['count']) && ctype_digit(strval($_POST['count']))){
        $count = (int)$_POST['count'];
    }

    addToCart($productId, $count);
    header('refresh:0;url='.$lastPage);
}
elseif(isset($_GET['clear'])){
    setCart(array());
    header('refresh:0;url=cart.php');
}
else{
    echo 'Er ging iets mis en je word over 3 seconden op de hoofdpagina geplaatst';
    //header('refresh:3;url=index.php');
}
