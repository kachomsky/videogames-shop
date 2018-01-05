<?php
$idProduct = $_GET["id"];
$quantity = $_GET["quantity"];
$productAdded = getProductById($idProduct);
$productAdded['quantity'] = $quantity;

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
        }else if($_GET['menu'] == 3){
            $_SESSION['cart'] = array();
            $totalPriceCart = 0;
            $totalItems = 0;
            include __DIR__.'/../views/menuCart.php';
        }
    }
    else{
        $productRepeated = false;
        //looking for repeated products, to just sum quantities instead of add new product in cart.
        foreach($_SESSION['cart'] as $index=>$product){
            if($product['id'] == $productAdded['id']){
                $productRepeated = true;
                $_SESSION['cart'][$index]['quantity'] = $product['quantity'] + $productAdded['quantity'];
                $_SESSION['cart'][$index]['totalPrice'] = $_SESSION['cart'][$index]['quantity'] * $product['price'];
            }
        }
        if(!$productRepeated) {
            $totalPrice = $productAdded['price'] * $productAdded['quantity'];
            $productAdded['totalPrice'] = $totalPrice;
            array_push($_SESSION['cart'], $productAdded);
        }
        echo 1;
    }
}else{
    echo 0;
}
