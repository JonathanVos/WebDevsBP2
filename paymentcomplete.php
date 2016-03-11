<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/10/2016
 * Time: 16:42
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('cartfunctions.php');
require_once('database/productsDatabase.php');
require_once('database/connectDatabase.php');

$content = '';
if (isset($_SESSION['username']) && getCartCount() > 0) {
    $cart = getCart();
    $conn = getConnection();
    foreach ($cart as $item) {
        $product = getProduct($item[0]);
        if ($product['stock'] >= $item[1]) {
            $content .= $product['product_name'] . " Succesvol afgerond<br>";

            $newstock = $product['stock'] - $item[1];

            $sql = "UPDATE Products SET stock = ? WHERE product_id = ?";

            $params = array($newstock, $product['product_id']);

            $stmt2 = sqlsrv_query($conn, $sql, $params);

            /* If both queries were successful, commit the transaction. */
            /* Otherwise, rollback the transaction. */
            if ($stmt2) {
                sqlsrv_commit($conn);
            } else {
                sqlsrv_rollback($conn);
                echo "Database Error.<br />";
            }

        } else {
            $content .= $product['product_name'] . " Kon niet worden betaald omdate er niet in genoeg in de vooraad is<br>";
        }
    }
}

require ('template.php');