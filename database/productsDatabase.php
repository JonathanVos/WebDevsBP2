<?php
/**
 * Created by PhpStorm.
 * User: Bjorn
 * Date: 3/8/2016
 * Time: 15:18
 * used for getting product from the database and inserting products into the database
 */

require_once ('connectDatabase.php');

/**
 * @param The limit
 * @param A sql queary
 * @return products
 */
function getProducts($limit = 0, $where = ""){
    $sql = "SELECT";
    if(is_int($limit) && $limit > 0)
        $sql .= " TOP ".$limit;

    $sql .= " * FROM Products";

    if(!empty($where))
        $sql .= " WHERE ".$where;

    return getDataArray($sql);
}


/**
 * Gets a single product
 * @param Product Id
 * @return the product and null if product doesn't excist
 */
function getProduct($product_id){
    $var = getDataArray("select * from Products WHERE product_id =".$product_id);
    if(count($var) > 0)
        return $var[0];
    else
        return null;
}

function addProduct($productId, $productName, $productPrice, $productDescription, $imageName){
    trigger_error("<font color=red>Add Product not implemented</font>", E_USER_WARNING);
}

function getProductSmallHtml($product){
    $html = "";
    if(isset($product['product_id'])) {
        $html .= '<li>
                    <div class="productitem">
                        <a href="product.html?'.$product['product_id'].'"> <img src="img/verkeersborden/'.$product['image_name'].'_klein.jpg" alt="'.$product['image_name'].'"/></a><br>
                            '.$product['description'].'<br>
                        <form> '.$product['price'].'
                            <input type="hidden" name="product_id" value="'.$product['product_id'].'">
                            <button type="submit">In winkelwagen</button>
                        </form>
                    </div>
                  </li>';
    }

    return $html;
}