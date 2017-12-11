<section class="categories">
    <h2 class="mainTitle">Products Detail: <?php echo $product['name'];?></h2>
 
    <div class="detailBox">
        <div class="imageDetail">
            <img src="views/resources/img/<?php echo $product['image'];?>.<?php echo $product['img_type'];?>" />
        </div>
        <div id="details">
            <h3><?php echo $product['name'];?></h3>
            <p>Description:<?php echo $product['description'];?></p>
            <br/>
            <input class="buttonQuantity" type="button" value="-" />

            <input class="quantityVal" type="number" value="1"/>

            <input type="button" class="buttonQuantity" value="+" />

            <p style="margin-left: 9%"><b>In stock</b></p>

            <p>Price:<?php echo $product['price']; echo "&euro;" ?></p>
            <input data-value='<?php echo json_encode($product, JSON_UNESCAPED_UNICODE) ?>' name="addCartButton" class="addCartButton" type="button" value="Add to Cart" />
        </div>
    </div>
</section>