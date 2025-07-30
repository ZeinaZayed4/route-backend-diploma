<?php

require_once '../database.php';
require_once '../functions/api_response.php';
require_once '../functions/uri.php';
require_once '../functions/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$id = checkUri();
	
	if (! empty($id)) {
		$query = "SELECT * FROM `supplier` WHERE `id` = $id";
		$result = mysqli_query($conn, $query);
		
		if (mysqli_num_rows($result) === 1) {
			$supplier = json_encode(mysqli_fetch_assoc($result));
			echo $supplier;
		} else {
			message("Supplier not found!", 404);
		}
	} else {
		message("Supplier id is required", 400);
	}
} else {
	message("Method not allowed!", 405);
}

