<?php

namespace Controllers\Admin;

use Models\ProductModel;

class AdminProductsController {

	private $productModel;

	public function __construct(){
		$this->productModel = new ProductModel();
	}

    public function index() {
    	$products = $this->productModel->getProducts();
    	echo '<pre>'; var_dump($products); echo '</pre>';
    }

    public function insert() {
    	echo 'admin product insert';
    }

}