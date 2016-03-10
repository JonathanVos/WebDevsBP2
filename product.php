<?php
if(!isset($_GET['id'])){
    header('Location: shop.php');
    exit();
}
require_once ('database/productsDatabase.php');

$productId = $_GET['id'];

$product = getProduct($productId);
$content = '<a href="shop.php">Terug</a>';

$content .= getProductsBigHtml($product);
require 'template.php';