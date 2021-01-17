<?php

require "vendor/autoload.php";

use Controllers\HomeController;
use Controllers\ProductsController;
use Controllers\Admin\AdminHomeController;
use Controllers\Admin\AdminProductsController;
use Controllers\Admin\AdminCategoryController;

$homeController = new HomeController();
$productsController = new ProductsController();
$adminHomeController = new AdminHomeController();
$adminProductsController = new AdminProductsController();
$adminCategoryController = new AdminCategoryController();

$action = isset( $_GET['action'] )? $_GET['action'] : '';
$method = isset( $_GET['method'] )? $_GET['method'] : '';
$method2 = isset( $_GET['method2'] )? $_GET['method2'] : ''; // only for admin

switch ($action) {
	case '':
		$homeController->index();        
        break;	

    case 'home':
    	if ($method == '') {
        	$homeController->index();        
        }else {
        	echo '404 not found';
        }
        break;
    
    case 'products':
    	if ($method == '') {
    		$productsController->index();
    	}elseif ($method == 'list') {
        	$productsController->index();
        }elseif ($method == 'insert') {
        	$productsController->insert();
        }else {
        	echo '404 not found';	
        }
        break;

    # adding some routes like addtocart / Controllers / Model

    case 'admin':
    	if ($method == ''){
    		$adminHomeController->index();
    	} elseif ($method == 'products') {

    		if($method2 == 'insert'){

    			$adminProductsController->insert();	

    		}elseif($method2 == ''){

    			$adminProductsController->index();

    		}elseif($method2 == 'list'){

    			$adminProductsController->index();

            }elseif($method2 == 'create'){

                $adminProductsController->create();                

    		}elseif($method2 == 'insert'){

                $adminProductsController->insert();                

            }else{
    			echo '404 not found';
    		}
    	} elseif ($method == 'category') {

            if($method2 == ''){

                $adminCategoryController->index();

            }

        }

    	break;

    default:
        echo '404 not found';
        break;
}