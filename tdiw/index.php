<?php
$action = $_GET['action'];
session_start();
switch ($action) {
	case 'list-products':
		include __DIR__.'/controllers/products.php';
	break;

	case 'product-detail':
		include __DIR__.'/controllers/productDetail.php';
	break;

	case 'sign-in':
		include __DIR__.'/controllers/signIn.php';
	break;

	case 'sign-up':
		include __DIR__.'/controllers/signUp.php';
	break;

    case 'log-out':
        include __DIR__.'/controllers/logOut.php';
    break;

    case 'cart-management':
        include __DIR__.'/controllers/cartManagement.php';
    break;

	default:
		include __DIR__.'/controllers/categories.php';
	break;
}