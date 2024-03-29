<?php

$error = false;
$logged = false;

//If a login post request is send
if (isset($_POST) && $_POST) {
    $emailFiltered = htmlentities($_POST['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $logInResult = logInAdminUser($emailFiltered);

    //If the password is correct the logged var gets true value and session is started.
    if (password_verify(htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8'), $logInResult['password'])) {
        $logged = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['cart'] = array();
        $_SESSION['admin'] = true;
    //if the password isn't correct an error message is set.
    } else {
        $error = true;
    }
}
include __DIR__.'/../views/signInAdmin.php';