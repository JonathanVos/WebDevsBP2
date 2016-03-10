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
$sql = "WHERE catogory_name LIKE '%".$product['catogory_name']."%'";
$relavent = getProducts(3, $sql);

$content .= '<div class="gerelateerd_producten"> <ul>';
$content .= '<h2>Relevant</h2>';
foreach($relavent AS $rBord){
    if($rBord['product_id'] != $product['product_id']){
        $content .= getProductSmallHtml($rBord);
    }

}

$content .= '</ul></div>';
require 'template.php';