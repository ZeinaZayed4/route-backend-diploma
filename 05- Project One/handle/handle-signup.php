<?php

session_start();
include "../functions/validate.php";

if (isset($_POST['signup'])) {
	$username = sanitize($_POST['username']);
	$email = sanitize($_POST['email']);
	$password = sanitize($_POST['password']);
	$phone = sanitize($_POST['phone']);
	$address = sanitize($_POST['address']);
	
	$errors = [];
	$errors = array_merge(
		$errors, validateUsername($username),
	    validateEmail($email), validatePassword($password),
		validatePhone($phone), validateAddress($address)
	);
	
	if (!empty($errors)) {
		$_SESSION['errors'] = $errors;
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		$_SESSION['phone'] = $phone;
		$_SESSION['address'] = $address;
		header("Location: ../signup.php");
		exit();
	}
	
	$_SESSION['users'][] = [
		'username' => $username,
		'email' => $email,
		'password' => password_hash($password, PASSWORD_DEFAULT),
		'phone' => $phone,
		'address' => $address
	];
	header("Location: ../login.php");
	exit();
} else {
	header("Location: ../signup.php");
	exit();
}
