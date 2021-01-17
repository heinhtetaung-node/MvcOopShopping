@extends('admin.layout')

@section('body')

	
	
	<form action="{{ $baseurl }}products/insert" method="POST" enctype="multipart/form-data">
		Product Name : <input type="text" name="product_name">
		<br>
		Price : <input type="number" name="price">
		<br>
		Cost : <input type="number" name="cost">
		<br>
		

		<!-- Category : <select name="category_id">
			<?php 
				// foreach ($acategories as $key => $acategory) {
				// 	echo "<option value ='{$acategory['id']}' >{$acategory['name']}</option>";
				// }
			 ?>
		</select>
		<br>
		Sub category : <select name="subcategory_id">
			<?php 
				// foreach ($categories as $key => $category) {
				// 	echo "<option value = '{$category['id']}'>{$category['sub_name']}</option>";
				// }
			 ?>			
		</select>
		<br>
		Photo 
		<input type="file" name="prod_photo"> -->

		<button type="submit" name="save">Save</button>
	</form>	

@endsection