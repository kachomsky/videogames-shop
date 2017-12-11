<?php
$productAdded = $_POST["data"];

if(isset($_SESSION['cart'])){
    $totalItems = 0;
    if(isset($_GET['menu'])){
        foreach($_SESSION['cart'] as $product):
            $totalPriceCart = $totalPriceCart + ($product['price']*$product['quantity']);
            $totalItems = $totalItems + $product['quantity'];
        endforeach;
        if($_GET['menu'] == 1){
            include __DIR__.'/../views/menuCart.php';
        }else if($_GET['menu'] == 2){
            include __DIR__.'/../views/cartProducts.php';
        }
    }
    else{
        $totalPrice = $productAdded['price']*$productAdded['quantity'];
        $productAdded['totalPrice'] = $totalPrice;
        array_push($_SESSION['cart'],$productAdded);
        echo 1;
    }
}else{
    echo 0;
}
