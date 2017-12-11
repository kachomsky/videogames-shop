<?php

$id_category = $_GET['category_id'];

include __DIR__.'/../models/db.php';
include __DIR__.'/../models/products.php';

$productCategory = getProductCategoryName($id_category);

if($id_category == 1){
    $products = getAllProducts();
}
else{
    $products = getCategoryProducts($id_category); // Aquesta crida és al model
}
include __DIR__.'/../views/products.php';

