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
