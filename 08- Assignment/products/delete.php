<?php

require_once '../database.php';
require_once '../functions/api_response.php';
require_once '../functions/uri.php';
require_once '../functions/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$id = checkUri();
	
	$errors = [];
	if (! empty($id)) {
		$errors = validateProductId($id, $conn);
		
		if (empty($errors)) {
			$query = "DELETE FROM `products` WHERE `id` = $id";
			$result = mysqli_query($conn, $query);
			
			if ($result) {
				message('Product deleted successfully!', 200);
			} else {
				message('Failed to delete product', 500);
			}
		} else {
			message($errors, 400);
		}
	} else {
		message("Product id is required", 400);
	}
} else {
	message("Method not allowed", 405);
}
