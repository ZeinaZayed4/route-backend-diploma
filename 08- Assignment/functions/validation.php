<?php

require_once '../database.php';

function sanitize($input): string
{
	return trim(htmlspecialchars($input));
}

function validateName($name): array
{
	$errors = [];
	if (empty($name)) {
		$errors[] = "Name is required";
	} elseif (strlen($name) < 4 || strlen($name) > 20) {
		$errors[] = "Name must be between 4 and 20 characters.";
	}
	return $errors;
}

function validateCode($code): array
{
	$errors = [];
	if (empty($code)) {
		$errors[] = "Code is required";
	} elseif (strlen($code) < 3 || strlen($code) > 20) {
		$errors[] = "Code must be between 3 and 20 characters.";
	}
	return $errors;
}

function validatePrice($price): array
{
	$errors = [];
	if (empty($price)) {
		$errors[] = "Price is required";
	}
	return $errors;
}

function validateSupplierId($id, $conn): array
{
	$errors = [];
	if (empty($id)) {
		$errors[] = "Supplier id is required";
	} elseif (! in_array($id, getSuppliers($conn))) {
		$errors[] = "Supplier not found";
	}
	return $errors;
}

function getSuppliers($conn): array
{
	$query = "SELECT `id` FROM `supplier`";
	$result = mysqli_query($conn, $query);
	$ids = [];
	
	if (mysqli_num_rows($result) > 0) {
		$ids[] = mysqli_fetch_assoc($result)['id'];
		return $ids;
	} else {
		return [];
	}
}

function validateImage($image_file): array
{
	$errors = [];
	
	if (!isset($image_file)) {
		$errors[] = "No image uploaded";
		return $errors;
	}
	$image_name = $image_file['name'];
	$image_size = $image_file['size'] / (1024 * 1024);
	$extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
	$image_error = $image_file['error'];
	$extension_types = ['png', 'jpg', 'jpeg'];
	
	if ($image_error != 0) {
		$errors[] = "Error uploading image.";
	} elseif (!in_array($extension, $extension_types)) {
		$errors[] = "Image extension isn't supported.<br />Supported extensions: ('png', 'jpg', 'jpeg').";
	} elseif ($image_size > 2) {
		$errors[] = "Image size must be less than 2MB.";
	}
	
	return $errors;
}

function generateImageName($name): string
{
	$extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
	return uniqid() . ".$extension";
}

function uploadImage($image_file): string {
	$tmp_name = $image_file['tmp_name'];
	$image_name = $image_file['name'];
	$new_image_name = generateImageName($image_name);
	
	move_uploaded_file($tmp_name, "../uploads/$new_image_name");
	return $new_image_name;
}

function validateProductId($id, $conn): array
{
	$errors = [];
	if (! in_array($id, getProductsId($conn))) {
		$errors[] = 'Product not found';
	}
	return $errors;
}

function getProductsId($conn): array
{
	$query = "SELECT `id` FROM `products`";
	$result = mysqli_query($conn, $query);
	$ids = [];
	
	if (mysqli_num_rows($result) > 0) {
		$ids[] = mysqli_fetch_assoc($result)['id'];
		return $ids;
	} else {
		return [];
	}
}

function validateEmail($email, $conn): array
{
	$errors = [];
	if (empty($email)) {
		$errors[] = "Email is required.";
	} elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Invalid email format.";
	} elseif (in_array($email, getSuppliersEmails($conn))) {
		$errors[] = "Email already exists";
	}
	return $errors;
}

function getSuppliersEmails($conn): array
{
	$query = "SELECT `email` FROM `supplier`";
	$result = mysqli_query($conn, $query);
	$emails = [];
	
	if (mysqli_num_rows($result) > 0) {
		$emails[] = mysqli_fetch_assoc($result)['email'];
		return $emails;
	} else {
		return [];
	}
}

function validatePhone($phone): array
{
	$errors = [];
	if (empty($phone)) {
		$errors[] = "Phone is required";
	}
	return $errors;
}

function validateEmailUpdate($email): array
{
	$errors = [];
	if (empty($email)) {
		$errors[] = "Email is required.";
	} elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Invalid email format.";
	}
	return $errors;
}
