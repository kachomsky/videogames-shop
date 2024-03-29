<?php

$error = false;
$logged = false;

//If a login post request is send
if (isset($_POST) && $_POST) {
    $emailFiltered = htmlentities($_POST['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $logInResult = logInUser($emailFiltered);

    //If the password is correct the logged var gets true value and session is started.
    if (password_verify(htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8'), $logInResult['password'])) {
        $logged = true;
        $_SESSION['user'] = $logInResult;
        $_SESSION['cart'] = array();
        header('Location: index.php');
    //if the password isn't correct an error message is set.
    } else {
        $error = true;
    }
}
include __DIR__.'/../views/signIn.php';