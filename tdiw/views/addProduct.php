<!DOCTYPE html>
<html>
<?php
include __DIR__.'/../views/head.html';
?>
<body>

<?php
include __DIR__.'/../views/header.php';
?>

<section>
    <?php if(isset($_SESSION['admin']) and $_SESSION['admin'] == true) {?>
        <?php
        if (isset($error)) {
            if ($error) {
                echo "<h2>Error1 adding the product!</h2>";
            } else {
                echo "<h2>Product added correctly!</h2>";
            }
        }
        ?>
        <div class="form">
            <h2>Administration - Add product:</h2>
            <form action="index.php?action=admin-add-product" method="post" enctype="multipart/form-data">
                Product name: <br/>
                <input name="product_name" type="text" maxlength="255" required><br/><br/>
                Category: <br>
                <select name="subcategory">
                    <?php
                    foreach($categoriesAndSubcategories as $categoryAndSubcategory) {
                        echo "<option value='".$categoryAndSubcategory['subcategory_id']."'>".$categoryAndSubcategory['category_name']." - ".$categoryAndSubcategory['subcategory_name']."</option>";
                    }
                    ?>
                </select><br/><br/>
                Description: <br>
                <input name="product_description" type="text" required><br/><br/>
                Image: <br>
                <input name="product_image" type="file" accept="image/*"><br/><br/>
                Price: <br>
                <input name="product_price" type="number" required><br/><br/>
                <input type="submit" value="Add product!"><br/><br/>
            </form>
        </div>
    <?php } else {
        echo "<h2>This area is only for the website administrators!</h2>";
    }?>
</section>

<?php
include __DIR__.'/../views/footer.html';
?>

</body>
</html>