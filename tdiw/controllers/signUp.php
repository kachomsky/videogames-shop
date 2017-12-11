<?php

include __DIR__.'/../models/db.php';
include __DIR__.'/../models/signUp.php';

if (isset($_POST['submit'])){
    if(!empty($_POST['name']) AND !empty($_POST['password']) AND !empty($_POST['email']) AND !empty($_POST['address'])
        AND !empty($_POST['city']) AND !empty($_POST['postal_code']) AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $correctSignUp = true;

        //Getting parameters from POST.
        $name = htmlentities($_POST['name'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $password = password_hash(htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8'), PASSWORD_DEFAULT);
        $email = htmlentities($_POST['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $address = htmlentities($_POST['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $city = htmlentities($_POST['city'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $postal_code = htmlentities($_POST['postal_code'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $active = 1;

        signUpUser($name, $password, $email, $address, $city, $postal_code, $active);
    } else {
        $correctSignUp = false;
    }
}

include __DIR__.'/../views/signUp.php';