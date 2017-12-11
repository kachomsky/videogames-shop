<?php

include __DIR__.'/../models/db.php';
include __DIR__.'/../models/categories.php';

$categories = getCategories(); // Aquesta crida és al model
//print_r($categories);die();
include __DIR__.'/../views/categories.php';

