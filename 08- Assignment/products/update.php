<?php

require_once '../database.php';
require_once '../functions/validation.php';
require_once '../functions/api_response.php';
require_once '../functions/uri.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$id = checkUri();
	
	if (! empty($id)) {
		$name = sanitize($_POST['name']);
		$code = sanitize($_POST['code']);
		$description = sanitize($_POST['description']);
		$price = sanitize($_POST['price']);
		$supplier_id = sanitize($_POST['supplier_id']);
		$image = $_FILES['image'];
		
		$errors = [];
		$errors = array_merge(
			$errors,
			validateProductId($id, $conn),
			validateName($name),
			validateCode($code),
			validatePrice($price),
			validateSupplierId($supplier_id, $conn)
		);
		
		if (isset($image)) {
			$errors = array_merge($errors, validateImage($image));
		}
		
		if (empty($errors)) {
			$query = "SELECT * FROM `products` WHERE `id` = $id";
			$result = mysqli_query($conn, $query);
			
			if (mysqli_num_rows($result) === 1) {
				$product = mysqli_fetch_assoc($result);
				$old_image = $product['image'];
				
				if (isset($image)) {
					$new_image = uploadImage($image);
					if ($new_image) {
						if ($old_image && file_exists("../uploads/$old_image")) {
							unlink("../uploads/$old_image");
						}
						$old_image = $new_image;
					} else {
						message('Failed to upload image', 500);
						exit();
					}
				}
				
				$query = "UPDATE `products` SET `name` = '$name', `code` = '$code', `description` = '$description', `price` = '$price', `image` = '$old_image', `supplier_id` = $supplier_id WHERE `id` = $id";
				$result = mysqli_query($conn, $query);
				
				if ($result) {
					message("Product updated successfully", 200);
				} else {
					message("Failed to update product", 500);
				}
			} else {
				message("Product not found!", 404);
			}
		} else {
			message($errors, 400);
		}
	} else {
		message('Product id is required', 400);
	}
} else {
	message('Method not allowed!', 405);
}
