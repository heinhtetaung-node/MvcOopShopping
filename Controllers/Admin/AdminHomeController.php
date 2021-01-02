<?php

namespace Controllers\Admin;

use Models\ProductModel;

class AdminHomeController {
    
    private $ProductModel;

    public function __construct(){
        $this->ProductModel = new ProductModel();
    }

    public function index(){
        
        echo 'welcome admin';

    }

}