<?php

namespace Models;

class ProductModel {

    public function getProducts(){
        echo 'select * from products from model<br>';
        return [
            [
                'id' => 1,
                'name' => 'P1'
            ],
            [
                'id' => 2,
                'name' => 'P2'
            ],
            [
                'id' => 3,
                'name' => 'P3'
            ]
        ];
    }

}