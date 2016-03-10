<?php
require_once('database/productsDatabase.php');
$content = '';

//add search to the html
$content .= '
    <div class="searchmenu">
        <form>
          <input type="text">
          <button type="submit">Search</button>
        </form>


        <form method="get" target="_self" action="#">
    '.getProductCount().' Producten | Toon
    <select name="productcount" onchange="this.form.submit()">
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="48">48</option>
    </select>
    Per pagina
</form>
      </div>';

//Add catogories to the html
$content .= '<div class="categories"><ul>';
$catogories = getCatogories();
foreach ($catogories as $catogory) {
    $content .= '<li><a href="#">' . $catogory['name'] . '</a></li>';
}
$content .= '</ul></div>';

//add the product list to html
$content .= '<div class="productslist"> <ul>';
$products = getProducts();
foreach ($products as $item) {
    $content .= getProductSmallHtml($item);
}

$content .= '</ul></div>';
require 'template.php';
?>