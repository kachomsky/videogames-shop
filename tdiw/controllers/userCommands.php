<?php
/**
 * Created by PhpStorm.
 * User: alexg
 * Date: 05/01/2018
 * Time: 17:22
 */
if(isset($_SESSION['user'])){
    $commands = getUserCommand($_SESSION['user']['id']);
    include __DIR__.'/../views/userCommands.php';
}else{
    echo "You need to be an admin";
}
