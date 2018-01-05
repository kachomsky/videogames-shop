<?php

$id_category = $_GET['category_id'];
$search = $_GET['search'];
$productName = $_GET['productName'];
$productCategory = getProductCategoryName($id_category);

if(isset($search) && isset($productName)){
    $products = searchProducts($productName);
}
else{
    if($id_category == 1){
        $products = getAllProducts();
    }
    else{
        $products = getCategoryProducts($id_category); // Aquesta crida és al model
    }
}

include __DIR__.'/../views/products.php';