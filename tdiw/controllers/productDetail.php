<?php

$product_id = $_GET['product_id'];

include __DIR__.'/../models/db.php';
include __DIR__.'/../models/productDetail.php';

$product = getProductById($product_id);

include __DIR__.'/../views/productDetail.php';

