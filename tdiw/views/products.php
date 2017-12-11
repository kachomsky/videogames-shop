<section class="categories">
    <h2 id="productTitle" class="mainTitle">Products:</h2>
    <div id="search">
        <input type="text" placeholder="Search product"/>
        <button type="button">Search</button>

    </div>

    <h2><?php echo $productCategory["name"];?></h2>

    <div id="currentProductDetail"></div>

    <div class="products">
        <ul>
            <?php foreach ($products as $index => $product): ?>
            <li>
                <a href="#currentProductDetail" class="name showDetails" data-value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>

                <a href="#currentProductDetail" class="img showDetails" data-value="<?php echo $product['id']; ?>">
                    <img  data-value="<?php echo $product['id']; ?>" class="productImage showDetails" src="views/resources/img/<?php echo $product['image'] ?>.<?php echo $product['img_type'] ?>" />
                </a>
                <p class="price"><b>Precio:</b><?php echo $product['price']; echo "&euro;" ?></p>
                <input data-value="<?php echo $index;?>" id="showDescription" class="addCartButton" type="button" value="Show description" />
               <!--<input data-value="<?php echo $product['id']; ?>" class="addCartButton showDetails" type="button" value="Details" />-->
                <div id="description<?php echo $index; ?>" class="description" style="display: none"><?php echo $product['description'];?></div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>