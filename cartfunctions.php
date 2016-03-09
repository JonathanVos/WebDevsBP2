<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/9/2016
 * Time: 10:27
 */


function addToCart($productId, $count){
    $cart = getCart();

    $found = false;
    foreach($cart as $key => $product){
        if($product[0] == $productId){
            $found = true;
            $cart[$key][1] = $count;
        }
    }

    if(!$found)
        array_push($cart, array($productId, $count));

    setCart($cart);
}

function removeFromCart($productId){
    $cart = getCart();

    foreach($cart as $key => $product){
        if($product[0] == $productId){
            unset($cart[$key]);
        }
    }

    setCart($cart);
}

function getCart(){
    if(isset($_SESSION['cart']))
        return $_SESSION['cart'];
    else
        return array();
}

function setCart($cart){
    $_SESSION['cart'] = $cart;
}

function getCartCount(){
    return count(getCart());
}