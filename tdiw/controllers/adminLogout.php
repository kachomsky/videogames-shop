<?php

if(isset($_SESSION['admin'])){
    session_unset();
    session_destroy();
}

header('Location: index.php');