<?php

require_once '../database.php';
require_once '../functions/api_response.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$query = "SELECT * FROM `products`";
	$result = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($result) > 0) {
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$products = json_encode($products);
		echo $products;
	} else {
		message("No data found!", 404);
	}
} else {
	message("Method not allowed!", 405);
}
