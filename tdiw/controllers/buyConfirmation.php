<?php
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $product){
            $totalPriceCart = $totalPriceCart + ($product['price']*$product['quantity']);
            $totalItems = $totalItems + $product['quantity'];
        }

        $date = date('l jS \of F Y h:i:s A');
        $userId = $_SESSION['user']['id'];
        $lastId = insertCommand($userId, $date, $totalItems, $totalPriceCart);
       // echo "total price ".$totalPriceCart." totalItems ".$totalItems." date ".$date." userId ".$userId." lastId ".$lastId;

        foreach($_SESSION['cart'] as $product){
            //echo "<p>"." lastId: ".$lastId." ProductId: ". $product['id']." Name: ". $product['name']." Quantity". $product['quantity']." Price: ". $product['price']." Total Price". $product['totalPrice']."</p>";
            insertCommandLine($lastId, $product['id'], $product['name'], $product['quantity'], $product['price'], $product['totalPrice']);
        }

        $buyConfirmed = $_SESSION['cart'];
        $_SESSION['cart'] = array();

        include __DIR__.'/../views/buyConfirmed.php';


    }
