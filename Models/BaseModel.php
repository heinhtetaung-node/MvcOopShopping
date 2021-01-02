<?php

namespace Models;

class BaseModel {
	
	public $mysqli;

	public function __construct(){		

		$this->mysqli = new \mysqli("localhost:3307" , "root" , "", "shopping_cart");

		if ($this->mysqli-> connect_errno) {
			echo "Failed to connect to database: " . $mysqli -> connet_error;
			exit();
		}
	}

}