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
