<?php

declare(strict_types=1);
session_start();

if (!isset($_SESSION['users'])) {
	$_SESSION['users'] = [];
}

function sanitize(string $input): string
{
	return trim(htmlspecialchars($input));
}

function validateUsername($username): array
{
	$errors = [];
	if (empty($username)) {
		$errors[] = "Username is required.";
	} elseif (!preg_match("/^[a-zA-Z0-9 ]*$/", $username)) {
		$errors[] = "Username: Only letters, numbers, and white spaces are allowed.";
	} elseif (strlen($username) < 3 || strlen($username) > 15) {
		$errors[] = "Username must be between 3 and 15 characters.";
	}
	return $errors;
}

function validateEmail($email): array
{
	$errors = [];
	if (empty($email)) {
		$errors[] = "Email is required.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = "Invalid email format.";
	} elseif (in_array($email, array_column($_SESSION['users'], 'email'))) {
		$errors[] = "Email already exists.";
	}
	return $errors;
}

function validatePassword($password): array
{
	$errors = [];
	if (empty($password)) {
		$errors[] = "Password is required.";
	} elseif (!preg_match('/^[a-zA-Z0-9_]*$/', $password)) {
		$errors[] = "Password: Only letters, numbers, and underscores are allowed.";
	} elseif (strlen($password) < 8 || strlen($password) > 20) {
		$errors[] = "Password must be between 8 and 20 characters.";
	}
	return $errors;
}

function validatePhone($phone): array
{
	$errors = [];
	if (empty($phone)) {
		$errors[] = "Phone is required.";
	} elseif (!preg_match('/[0-9() ]/', $phone)) {
		$errors[] = "Invalid phone format.";
	}
	return $errors;
}

function validateAddress($address): array
{
	$errors = [];
	if (empty($address)) {
		$errors[] = "Address is required.";
	} elseif (!preg_match('/^[a-zA-Z0-9 ]*$/', $address)) {
		$errors[] = "Address: Only letters, numbers, and white spaces are allowed.";
	} elseif (strlen($address) < 3 || strlen($address) > 25) {
		$errors[] = "Address must be between 3 and 25 characters.";
	}
	return $errors;
}

function validateImage($img): bool
{
	$extension_types = ['png', 'jpg', 'jpeg'];
	$extension = pathinfo($img, PATHINFO_EXTENSION);
	if (!in_array($extension, $extension_types)) {
		return false;
	}
	return true;
}
