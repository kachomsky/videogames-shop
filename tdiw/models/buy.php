<?php

function insertCommand($userId, $date, $nElements, $totalPrice){
    $dbh = connect();

    $sql_query = $dbh->prepare("INSERT INTO command (user_id, date, n_elements, total_price)
                                          VALUES (:user_id, :date, :n_elements, :total_price)");

    //Binding parameters
    $sql_query->bindParam(":user_id", $userId);
    $sql_query->bindParam(":date", $date);
    $sql_query->bindParam(":n_elements", $nElements);
    $sql_query->bindParam(":total_price", $totalPrice);

    $sql_query->execute();

    $sql_query = $dbh->prepare(" SELECT * FROM command WHERE date = :date");
    $sql_query->bindParam(":date", $date);
    $sql_query->execute();

    $lastId =  $sql_query->fetch(PDO::FETCH_ASSOC);

    //Closing connection
    $dbh = null;
    return $lastId['id'];
}

function insertCommandLine($commandId, $productId, $productName, $quantity, $unitaryPrice, $totalPrice){
    $dbh = connect();

    $sql_query = $dbh->prepare("INSERT INTO command_line (command_id, product_id, product_name, quantity, unitary_price, total_price)
                                          VALUES (:command_id, :product_id, :product_name, :quantity, :unitary_price, :total_price)");

    //Binding parameters
    $sql_query->bindParam(":command_id", $commandId);
    $sql_query->bindParam(":product_id", $productId);
    $sql_query->bindParam(":product_name", $productName);
    $sql_query->bindParam(":quantity", $quantity);
    $sql_query->bindParam(":unitary_price", $unitaryPrice);
    $sql_query->bindParam(":total_price", $totalPrice);

    $sql_query->execute();

    //Closing connection
    $dbh = null;
}

function getAllCommands(){
    $dbh = connect();
    $sql_query = $dbh->prepare(" SELECT * FROM command");
    $sql_query->execute();

    $commands =  $sql_query->fetchAll(PDO::FETCH_ASSOC);

    //Closing connection
    $dbh = null;
    return $commands;
}

function getUserCommand($userId){
    //SELECT * FROM command c, command_line cl WHERE c.user_id = 41 && c.id = cl.command_id;

    $dbh = connect();
    $sql_query = $dbh->prepare("SELECT * FROM command c, command_line cl WHERE c.user_id = :user_id && c.id = cl.command_id");
    $sql_query->bindParam(":user_id", $userId);
    $sql_query->execute();

    $commands =  $sql_query->fetchAll(PDO::FETCH_ASSOC);

    //Closing connection
    $dbh = null;
    return $commands;
}