<?php

require "vendor/autoload.php";

use Controllers\HomeController;
use Controllers\ProductsController;

$homeController = new HomeController();
$productsController = new ProductsController();

$action = isset( $_GET['action'] )? $_GET['action'] : '';

switch ($action) {
    case 'home':
        echo 'decide which controller should send in index.php';
        $homeController->index();        
        break;
    
    case 'products':
        $productsController->index();
        break;

    default:
        echo '404 not found';
        break;
}