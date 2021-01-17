<?php

namespace Controllers\Admin;

use Models\ProductModel;

use Controllers\BaseController;

class AdminProductsController extends BaseController {

	private $productModel;

	public function __construct(){
		$this->productModel = new ProductModel();
	}

    public function index() {
    	$products = $this->productModel->getProducts();

    	$this->renderBlade('admin.products', ['products' => $products]);
    }

    public function insert() {
    	$data = $_POST;
    	$result = $this->productModel->insert($data);
    	if($result == true){
    		header('location: '.$this->admin_baseurl.'products');
    	}
    	echo 'something error occoured'; exit;
    }

    public function create() {
    	// $categories = get data from categoryModel

    	// $sub_categories = get data from subcategoryModel
    	
    	$this->renderBlade('admin.product_create'  /* , ['categories' => $categories, 'sub_categories' => $sub_categories] */ );
    }

}