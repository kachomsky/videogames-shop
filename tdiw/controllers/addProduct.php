<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 03/01/2018
 * Time: 22:40
 */

if(isset($_POST)) {
    $target_file = __IMG_ABS_PATH__.basename($_FILES["product_image"]["name"]);
    $error = true;

    if(getimagesize($_FILES["product_image"]["tmp_name"]) > 0 && !file_exists($target_file)){
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
            addProduct($_POST['product_name'], $_POST['subcategory'], $_POST['product_description'], $_FILES["product_image"]["name"], $_POST['product_price']);
            $error = false;
        }
    }
}

$categoriesAndSubcategories = getCategoriesAndSubCategory();

include __DIR__.'/../views/addProduct.php';