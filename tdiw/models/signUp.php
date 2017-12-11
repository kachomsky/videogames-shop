<?php
function signUpUser($name, $password, $email, $address, $city, $postal_code, $active)
{
    $dbh = connect();
    $sql_query = $dbh->prepare("INSERT INTO user (email, password, name, address, town, postal_code, active)
                                          VALUES (:email, :password, :name, :address, :town, :postal_code, :active)");

    //Binding parameters
    $sql_query->bindParam(":email", $email);
    $sql_query->bindParam(":password", $password);
    $sql_query->bindParam(":name", $name);
    $sql_query->bindParam(":address", $address);
    $sql_query->bindParam(":town", $city);
    $sql_query->bindParam(":postal_code", $postal_code);
    $sql_query->bindParam(":active", $active);

    $sql_query->execute();

    //Closing connection
    $dbh = null;
}