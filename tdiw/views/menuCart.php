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
            <?php if(!empty($_SESSION['cart'])):?>
            <?php print_r($_SESSION['carro']); foreach($_SESSION['cart'] as $product): ?>
                <li class="clearfix">
                    <img src="<?php echo __IMG_REL_PATH__.$product['image']; ?>" />
                    <span class="item-name"><?php echo $product['name']; ?></span>
                    <span class="item-price"><?php echo $product['price']; echo "&euro;" ?></span>
                    <span class="item-quantity">Quantity: <?php echo $product['quantity']; ?></span>
                </li>
            <?php endforeach; ?>
            <?php else:?>
                <span class="item-name">Cart is empty</span>
            <?php endif; ?>
        </ul>

        <a href="index.php?action=cart-management&menu=2" class="button">See details</a>
        <span id="emptyCart" class="emptyCartLink">Empty cart</span>
    </div> <!--end shopping-cart -->
</div> <!--end container -->
