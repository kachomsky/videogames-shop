<?php

$product_id = $_GET['product_id'];

$product = getProductById($product_id);

include __DIR__.'/../views/productDetail.php';

