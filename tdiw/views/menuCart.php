<div class="container">
    <div class="shopping-cart-menu">
        <div class="shopping-cart-header">
            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge"><?php echo $totalItems; ?></span>
            <div class="shopping-cart-total">
                <span class="lighter-text">Total:</span>
                <span class="main-color-text"> <?php echo $totalPriceCart;  echo "&euro;"; ?></span>
            </div>
        </div> <!--end shopping-cart-header -->

        <ul class="shopping-cart-items">
            <?php foreach($_SESSION['cart'] as $product): ?>
                <li class="clearfix">
                    <img src="views/resources/img/<?php echo $product['image'] ?>.<?php echo $product['img_type'] ?>" />
                    <span class="item-name"><?php echo $product['name']; ?></span>
                    <span class="item-price"><?php echo $product['price']; echo "&euro;" ?></span>
                    <span class="item-quantity">Quantity: <?php echo $product['quantity']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>

        <a href="index.php?action=cart-management&menu=2" class="button">See details</a>
    </div> <!--end shopping-cart -->
</div> <!--end container -->
