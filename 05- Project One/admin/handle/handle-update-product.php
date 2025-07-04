<?php

include '../../functions/validate.php';

if (!isset($_GET['index'])) {
	header("Location: ../view/allProducts.php");
	exit();
}

$index = (int) $_GET['index'];

if (!isset($_SESSION['products'][$index])) {
	$_SESSION['errors'] = ['Product not found.'];
	header("Location: ../view/allProducts.php");
	exit();
}

$product = $_SESSION['products'][$index];

if (isset($_POST['updateProduct'])) {
	$cat = sanitize($_POST['cat']);
	$title = sanitize($_POST['title']);
	$desc = sanitize($_POST['desc']);
	$price = sanitize($_POST['price']);
	$quantity = sanitize($_POST['quantity']);
	$img = $_FILES['img'];
	$extension = pathinfo($img['name'], PATHINFO_EXTENSION);;
	$tmp_name = $img['tmp_name'];
	
	$errors = [];
	if (empty($cat) || empty($title) || empty($desc) || empty($price) || empty($quantity)) {
		$errors[] = "All fields are required.";
	}
	
	if (empty($errors)) {
		if (!empty($img['name'])) {
			if (!validateImage($img['name'])) {
				$errors[] = "Supported extensions: png, jpg, jpeg.";
			}
			
			if (empty($errors)) {
				$new_image_name = uniqid() . ".$extension";
				
				if (!empty($product['img']) && file_exists("../upload/{$product['img']}")) {
					unlink("../upload/{$product['img']}");
				}
				if (move_uploaded_file($tmp_name, "../upload/$new_image_name")) {
					$_SESSION['products'][$index] = [
						"cat" => $cat,
						"title" => $title,
						"desc" => $desc,
						"price" => $price,
						"quantity" => $quantity,
						"img" => $new_image_name
					];
					$_SESSION['success'] = "Product updated successfully!";
					header("Location: ../view/allProducts.php");
					exit();
				} else {
					$errors[] = "Failed to upload image.";
				}
			}
		} else {
			$_SESSION['products'][$index] = [
				"cat" => $cat,
				"title" => $title,
				"desc" => $desc,
				"price" => $price,
				"quantity" => $quantity,
				"img" => $product['img']
			];
			$_SESSION['success'] = "Product updated successfully!";
			header("Location: ../view/allProducts.php");
			exit();
		}
	} else {
		$_SESSION['errors'] = $errors;
		header("Location: ../view/updateProduct.php?index=$index");
		exit();
	}
} else {
	header("Location: ../view/updateProduct.php?index=$index");
	exit();
}
