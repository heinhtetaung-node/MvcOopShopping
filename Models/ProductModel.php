<?php

namespace Models;

use Models\BaseModel;

class ProductModel extends BaseModel {

    public function getProducts(){
        $sql = "SELECT * FROM products";
        $result = $this->mysqli->query($sql);
        $products = $result->fetch_all(MYSQLI_ASSOC);
        return $products;
    }

}