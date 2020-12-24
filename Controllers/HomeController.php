<?php

namespace Controllers;

use Models\ProductModel;

class HomeController {
    
    private $ProductModel;

    public function __construct(){
        $this->ProductModel = new ProductModel();
    }

    public function index(){
        echo 'sending from index.php<br>';
        echo 'getting data from model<br>';
        $products = $this->ProductModel->getProducts();
        echo 'showing data to user';
        echo '<pre>';
        print_r($products);

    }

}