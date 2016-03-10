<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/9/2016
 * Time: 9:39
 */

require_once ('database/productsDatabase.php');

echo getProductsBigHtml(getProduct(1));