<?php

require_once '../database.php';
require_once '../functions/validation.php';
require_once '../functions/api_response.php';
require_once '../functions/uri.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$id = checkUri();
	
	if (! empty($id)) {
		$name = sanitize($_POST['name']);
		$email = sanitize($_POST['email']);
		$phone = sanitize($_POST['phone']);
		$birth_date = sanitize($_POST['birth_date']);
		
		$errors = [];
		$errors = array_merge(
			$errors,
			validateName($name),
			validateEmailUpdate($email),
			validatePhone($phone)
		);
		
		if (empty($errors)) {
			$query = "SELECT * FROM `supplier` WHERE `id` = $id";
			$result = mysqli_query($conn, $query);
			
			if (mysqli_num_rows($result) === 1) {
				$supplier = mysqli_fetch_assoc($result);
				
				$query = "UPDATE `supplier` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `birth_date` = '$birth_date' WHERE `id` = $id";
				$result = mysqli_query($conn, $query);
				
				if ($result) {
					message("Supplier updated successfully", 200);
				} else {
					message("Failed to update supplier", 500);
				}
			} else {
				message("Supplier not found!", 404);
			}
		} else {
			message($errors, 400);
		}
	} else {
		message('Supplier id is required', 400);
	}
} else {
	message('Method not allowed!', 405);
}
