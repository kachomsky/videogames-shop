<!DOCTYPE html>
<html>
    <?php
    include __DIR__.'/../views/head.html';
    ?>
    <body>

        <?php
        include __DIR__.'/../views/header.php';
        ?>

        <div class="shopping-cart">
            <!-- Title -->
            <div class="title">
                Shopping cart
            </div>

            <?php foreach($_SESSION['cart'] as $product): ?>
            <div class="item">
                <div class="image">
                    <img height="100" width="100" src="views/resources/img/<?php echo $product['image'] ?>.<?php echo $product['img_type'] ?>"  />
                </div>

                <div class="descriptionCart">
                    <span><?php echo $product['name'] ?></span>
                    <span>Quantity: <?php echo $product['quantity'] ?></span>
                    <span>Unit price: <?php echo $product['price']; echo "&euro;" ?></span>
                </div>

                <div class="total-price"><?php echo $product['totalPrice']; echo "&euro;" ?></div>

            </div>

            <?php endforeach; ?>
            <p>Total Price: <?php echo $totalPriceCart;  echo "&euro;"; ?></p>
            <input class="buyButton" type="button" value="   Buy   " />
        </div>

        <?php
        include __DIR__.'/../views/footer.html';
        ?>

    </body>
</html>
