<?php

namespace Controllers\Admin;

use Models\ProductModel;

use Controllers\BaseController;

class AdminHomeController extends BaseController {
    
    private $ProductModel;

    public function __construct(){
        $this->ProductModel = new ProductModel();
    }

    public function index(){
        
        echo 'welcome admin';

    }

}