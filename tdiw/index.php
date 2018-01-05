<?php
include __DIR__.'/init.php';
include __DIR__.'/config.php';

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

    case 'admin-sign-in':
        include __DIR__.'/controllers/signInAdmin.php';
    break;

    case 'admin-list-products':
        include __DIR__.'/controllers/productsListAdmin.php';
    break;

    case 'buy':
        include __DIR__.'/controllers/buyConfirmation.php';
    break;

    case 'admin-add-product':
        include __DIR__.'/controllers/addProduct.php';
    break;

    case 'admin-commands':
        include __DIR__.'/controllers/adminCommands.php';
    break;

    case 'admin-logout':
        include __DIR__.'/controllers/adminLogout.php';
    break;

    case 'user-commands':
        include __DIR__.'/controllers/userCommands.php';
    break;


    default:
		include __DIR__.'/controllers/categories.php';
	break;
}