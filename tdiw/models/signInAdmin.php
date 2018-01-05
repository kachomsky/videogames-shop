<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 09/12/2017
 * Time: 18:42
 */

function logInAdminUser($email) {
    $dbh = connect();

    $sql_query = $dbh->prepare("SELECT a_u.password
    FROM admin_user a_u WHERE a_u.email = :email");
    $sql_query->bindParam(":email", $email, PDO::PARAM_STR);
    $sql_query->execute();

    $logInResult = $sql_query->fetch(PDO::FETCH_ASSOC);

    //Closing connection
    $dbh = null;

    return $logInResult;
}