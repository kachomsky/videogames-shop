<?php

function getAllProducts(){
    $dbh = connect();
    $sql_query = $dbh->prepare("SELECT * FROM product");
    $sql_query->execute();

    while($result = $sql_query->fetch(PDO::FETCH_ASSOC)){
        $products[] = $result;
    }
    //close connection
    $dbh = null;
    return $products;
}

function getCategoryProducts($id_category){
    $dbh = connect();
    $sql_query = $dbh->prepare("SELECT * FROM product WHERE subcategory_id IN (SELECT s.id FROM subcategory s, category c WHERE s.category_id = :id_category)");
    $sql_query->bindParam(':id_category',$id_category, PDO::PARAM_INT);
    $sql_query->execute();

    while($result = $sql_query->fetch(PDO::FETCH_ASSOC)){
        $products[] = $result;
    }
    //close connection
    $dbh = null;
    return $products;
}

function getProductCategoryName($id_category){
    $dbh = connect();
    $sql_query = $dbh->prepare("SELECT name FROM category WHERE id = :id_category");
    $sql_query->bindParam(':id_category',$id_category, PDO::PARAM_INT);
    $sql_query->execute();

    $productCategory =  $sql_query->fetch(PDO::FETCH_ASSOC);
    //close connection
    $dbh = null;
    return $productCategory;
}

function searchProducts($productName){
    $dbh = connect();
    $name = "%".$productName."%";
    $sql_query = $dbh->prepare("SELECT * FROM product WHERE name LIKE :product_name");
    $sql_query->bindParam(':product_name', $name);
    $sql_query->execute();

    while($result = $sql_query->fetch(PDO::FETCH_ASSOC)){
        $products[] = $result;
    }
    //close connection
    $dbh = null;
    return $products;
}

function addProduct($name, $subcategory_id, $description, $image, $price) {
    $dbh = connect();

    $sql_query = $dbh->prepare("INSERT INTO product (id, subcategory_id, name, description, image, price, active, divisa) 
      VALUES (NULL, :subcategory_id, :name, :description, :image, :price, 1, '€')");
    $sql_query->bindParam(':subcategory_id', $subcategory_id, PDO::PARAM_INT);
    $sql_query->bindParam(':name', $name, PDO::PARAM_STR);
    $sql_query->bindParam(':description', $description, PDO::PARAM_STR);
    $sql_query->bindParam(':image', $image, PDO::PARAM_STR);
    $sql_query->bindParam(':price', $price, PDO::PARAM_INT);

    $sql_query->execute();

    $dbh = null;
}
