<?php

require_once '../database.php';
require_once '../functions/api_response.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$query = "SELECT * FROM `supplier`";
	$result = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($result) > 0) {
		$suppliers = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$suppliers = json_encode($suppliers);
		echo $suppliers;
	} else {
		message("No data found!", 404);
	}
} else {
	message("Method not allowed!", 405);
}
