<?php

function getProductById($id_product){
    $dbh = connect();
    $sql_query = $dbh->prepare(" SELECT * FROM product WHERE id = :id_product");
    $sql_query->bindParam(':id_product',$id_product, PDO::PARAM_INT);
    $sql_query->execute();

    $productCategory =  $sql_query->fetch(PDO::FETCH_ASSOC);
    //close connection
    $dbh = null;
    return $productCategory;
}

