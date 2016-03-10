<?php
require_once('database/productsDatabase.php');

$limit = 12;
if(isset($_GET['limit']) && ctype_digit(strval($_GET['limit'])) && (int)$_GET['limit'] < 49){
    $limit = (int)$_GET['limit'];
}

$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$selectedCatogory = "";
if(isset($_GET['catogory'])){
    $selectedCatogory = $_GET['catogory'];
}


$content = '';
//add search to the html
$content .= '
    <div class="searchmenu">
     <form method="get" target="_self" action="shop.php">
          <input type="text" name="search" value="'.(isset($_GET['search']) ? $_GET['search'] : "" ).'">
          <button type="submit">Search</button>
          <br>
    '.getProductCount().' Producten | Toon
    <select name="limit" onchange="this.form.submit()"  >
            '.getOption(12, $limit).'
            '.getOption(24, $limit).'
            '.getOption(48, $limit).'
    </select>
    Per pagina
</form>
</div>';

//Add catogories to the html
$content .= '<div class="categories"><ul>';
$catogories = getCatogories();
foreach ($catogories as $catogory) {
    $content .= '<li><a href="shop.php?catogory='.$catogory['name'].'">' . $catogory['name'] . '</a></li>';
}
$content .= '</ul></div>';

//add the product list to html
$content .= '<div class="productslist"> <ul>';

$sql = "WHERE product_name LIKE '%".$search."%'";
if($selectedCatogory != "")
    $sql .= " AND catogory_name = '".$selectedCatogory."'";

$products = getProducts($limit, $sql);
if(count($products) == 0)
    $content .= '<br>Geen producten gevonden.';
foreach ($products  as $item) {
    $content .= getProductSmallHtml($item);
}

$content .= '</ul></div>';
require 'template.php';

function getOption($htmlValue, $value){
    $html = '<option value="'.$htmlValue.'"';
    if($value == $htmlValue){
        $html .= ' selected="selected"';
    }

    $html .= '>'.$htmlValue.'</option>';
    return $html;
}
?>