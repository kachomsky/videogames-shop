<?php

function getCategories(){
	$dbh = connect();
	$sql_query = $dbh->prepare("SELECT * FROM category");
	$sql_query->execute();
	
	while($result = $sql_query->fetch(PDO::FETCH_ASSOC)){
		$categories[] = $result;
	}
	//close connection
    $dbh = null;
    return $categories;
}

function getCategoriesAndSubCategory(){
    $dbh = connect();
    $sql_query = $dbh->prepare("SELECT sc.id as subcategory_id, c.name as category_name, sc.name as subcategory_name 
FROM category c, subcategory sc 
WHERE c.id = sc.category_id");
    $sql_query->execute();

    while($result = $sql_query->fetch(PDO::FETCH_ASSOC)){
        $categories[] = $result;
    }
    //close connection
    $dbh = null;
    return $categories;
}