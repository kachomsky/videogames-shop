<?php
if(isset($_SESSION['admin'])){
    $commands = getAllCommands();
    include __DIR__.'/../views/adminCommands.php';
}else{
    echo "You need to be an admin";
}

