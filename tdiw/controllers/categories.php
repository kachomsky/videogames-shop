<?php

$categories = getCategories(); // Aquesta crida és al model
//print_r($categories);die();
include __DIR__.'/../views/categories.php';

