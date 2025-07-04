<?php

session_start();
include "../functions/validate.php";

if (isset($_POST['login'])) {
	$email = sanitize($_POST['email']);
	$password = sanitize($_POST['password']);
	
	$errors = [];
	if (empty($email) || empty($password)) {
		$errors[] = "Email and password are required.";
	}
	
	if (!empty($errors)) {
		$_SESSION['errors'] = $errors;
		$_SESSION['email'] = $email;
		header("Location: ../login.php");
		exit();
	}
	
	if ($email === "admin@email.com" && $password === "admin1234") {
		$_SESSION['admin_login'] = true;
		header("Location: ../admin/view/layout.php");
		exit();
	}
	
	$emails = array_column($_SESSION['users'], 'email');
	$index = array_search($email, $emails);
	$hash_password = $_SESSION['users'][$index]['password'];
	
	if (in_array($email, $emails) && password_verify($password, $hash_password)) {
		$_SESSION['login'] = true;
		$_SESSION['username'] = $_SESSION['users'][$index]['username'];
		
		header("Location: ../shop.php");
		exit();
	} else {
		$_SESSION['errors'] = ["Email or password are not correct"];
		header("Location: ../login.php");
	}
	
} else {
	header("Location: ../login.php");
}
