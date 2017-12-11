<?php

if(isset($_SESSION['email'])){
    session_unset();
    session_destroy();
}

include __DIR__.'/../views/logOut.php';