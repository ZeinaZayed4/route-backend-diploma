<?php

require_once '../database.php';
require_once '../functions/api_response.php';
require_once '../functions/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = sanitize($_POST['name']);
	$code = sanitize($_POST['code']);
	$description = sanitize($_POST['description']);
	$price = sanitize($_POST['price']);
	$supplier_id = sanitize($_POST['supplier_id']);
	$image = $_FILES['image'];
	
	$errors = [];
	$errors = array_merge(
		$errors,
		validateName($name),
		validateCode($code),
		validatePrice($price),
		validateImage($image),
		validateSupplierId($supplier_id, $conn)
	);
	
	if (empty($errors)) {
		$newImageName = uploadImage($image);
		
		$query = "INSERT INTO `products`(`name`, `code`, `description`, `price`, `image`, `supplier_id`) VALUES ('$name', '$code', '$description', '$price', '$newImageName', $supplier_id)";
		$result = mysqli_query($conn, $query);
		
		if ($result) {
			message("Product added successfully!", 201);
		} else {
			message("Failed to add product", 500);
		}
	} else {
		message($errors, 400);
	}
	
} else {
	message('Method not allowed!', 405);
}
