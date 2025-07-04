<?php

include '../../functions/validate.php';

if (isset($_POST['addProduct'])) {
	$cat = sanitize($_POST['cat']);
	$title = sanitize($_POST['title']);
	$desc = sanitize($_POST['desc']);
	$price = sanitize($_POST['price']);
	$quantity = sanitize($_POST['quantity']);
	$img = $_FILES['img'];
	$extension = pathinfo($img['full_path'], PATHINFO_EXTENSION);;
	$tmp_name = $img['tmp_name'];
	
	$errors = [];
	if (empty($cat) || empty($title) || empty($desc) || empty($price) || empty($quantity) || empty($img['name'])) {
		$errors[] = "All fields are required";
	} elseif (!validateImage($img['full_path'])) {
		$errors[] = "Supported extensions: png, jpg, jpeg.";
	}
	
	if (!empty($errors)) {
		$_SESSION['errors'] = $errors;
		header("Location: ../view/addProduct.php");
		exit();
	}
	
	$new_image_name = uniqid() . ".$extension";
	$_SESSION['products'][] = [
		"cat" => $cat,
		"title" => $title,
		"desc" => $desc,
		"price" => $price,
		"quantity" => $quantity,
		"img" => $new_image_name
	];
	
	$image_uploaded = move_uploaded_file($tmp_name, "../upload/$new_image_name");
	if ($image_uploaded) {
		$_SESSION['success'] = "Product added successfully.";
		header("Location: ../view/addProduct.php");
		exit();
	}
} else {
	header("Location: ../view/addProduct.php");
}
