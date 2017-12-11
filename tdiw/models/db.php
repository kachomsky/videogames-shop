<?php

function connect(){
	$user = 'tdiw-d7';
	$pass = 'jeitiawo';
	try{
		$dbh = new PDO('mysql:host=localhost;dbname=tdiw-d7', $user, $pass);
	}catch(PDOException $e){
		print "Error!: " . $e->getMessage(). "<br/>";
		die();
	}
    convertUTF8($dbh);
	return $dbh;
}

function convertUTF8($db){
    $db->query('set character_set_client=utf8');
    $db->query('set character_set_connection=utf8');
    $db->query('set character_set_results=utf8');
    $db->query('set character_set_server=utf8');
}

/*
para everything:
select * from product;

para buscar todos los juegos:
select * from product where subcategory_id in (select s.id from subcategory s, category c where s.category_id = 2)

para todas peliculas:
select * from product where subcategory_id in (select s.id from subcategory s, category c where s.category_id = 3);

para todos libros:
select * from product where subcategory_id in (select s.id from subcategory s, category c where s.category_id = 4);


*/