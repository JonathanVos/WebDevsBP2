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
$sql = "WHERE catogory_name LIKE '%".$product['catogory_name']."%' AND product_id != ".$product['product_id'];
$relavent = getProducts(3, $sql);

$content .= '<div class="gerelateerd_producten">';
$content .= '<h2>Relevant</h2> <ul>';
foreach($relavent AS $rBord){
        $content .= getProductSmallHtml($rBord);
}

$content .= '</ul></div>';
require 'template.php';