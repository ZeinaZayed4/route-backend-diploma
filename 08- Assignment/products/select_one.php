<?php

require_once '../database.php';
require_once '../functions/api_response.php';
require_once '../functions/uri.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$id = checkUri();

	if (! empty($id)) {
		$query = "SELECT * FROM `products` WHERE `id` = $id";
		$result = mysqli_query($conn, $query);
		
		if (mysqli_num_rows($result) === 1) {
			$product = json_encode(mysqli_fetch_assoc($result));
			echo $product;
		} else {
			message("Product not found!", 404);
		}
	} else {
		message("Product id is required", 400);
	}
} else {
	message("Method not allowed!", 405);
}
