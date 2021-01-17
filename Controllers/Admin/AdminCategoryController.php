<?php

namespace Controllers\Admin;

use Models\ProductModel;

use Jenssegers\Blade\Blade;

use Controllers\BaseController;

class AdminCategoryController extends BaseController{

	private $productModel;

	public function __construct(){
		$this->productModel = new ProductModel();
	}

    public function index() {
    	$blade = new Blade('views', 'cache');

        // get data from CategoryModel

		echo $blade->render('admin.category', ['categories' => ['cat1', 'cat2', 'cat3'] ]);
    }

    public function insert() {
    	echo 'admin product insert';
    }

}