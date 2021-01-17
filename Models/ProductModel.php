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

    public function insert(){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $cost = $_POST['cost'];
        // $category_id = $_POST['category_id'];
        // $subcategory_id = $_POST['subcategory_id'];

        // $folder = "uploads/";
        // $target_file = $folder . basename($_FILES["prod_photo"]["name"]);
        // if($target_file != 'uploads/'){
            
        //     $image_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //     if( in_array($image_type, ['jpg', 'png', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF']) ){
        //         $image_size = $_FILES["prod_photo"]["size"];  // 1000000byets = 1MB
        //         if($image_size < 1000000){
                    
        //             if (move_uploaded_file($_FILES["prod_photo"]["tmp_name"], $target_file)) {

        //             } else {
        //                 echo 'something wrong'; exit;
        //             }

        //         } else {
        //             echo 'cant upload because file size is larger than 1MB'; exit;
        //         }
        //     } else {
        //         echo 'file type is not okay'; exit;
        //     }
        // }


        $sql = "
        INSERT INTO products (`product_name` , `price`, `cost` )
        
        VALUES ('{$product_name}' , '{$price}','{$cost}')
        
        ";

        if ($this->mysqli->query($sql)) {
            return true;   
        }
        return false;

    }

}