<?php

require_once '../database.php';
require_once '../functions/api_response.php';
require_once '../functions/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = sanitize($_POST['name']);
	$email = sanitize($_POST['email']);
	$phone = sanitize($_POST['phone']);
	$birth_date = sanitize($_POST['birth_date']);
	
	$errors = [];
	$errors = array_merge(
		$errors,
		validateName($name),
		validateEmail($email, $conn),
		validatePhone($phone)
	);
	
	if (empty($errors)) {
		$query = "INSERT INTO `supplier`(`name`, `email`, `phone`, `birth_date`) VALUES ('$name', '$email', '$phone', '$birth_date')";
		$result = mysqli_query($conn, $query);
		
		if ($result) {
			message("Supplier added successfully!", 201);
		} else {
			message("Failed to add supplier", 500);
		}
	} else {
		message($errors, 400);
	}
	
} else {
	message('Method not allowed!', 405);
}
