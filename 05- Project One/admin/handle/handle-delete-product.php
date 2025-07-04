<?php

session_start();

if (!isset($_SESSION['admin_login']) || !$_SESSION['admin_login']) {
	header("Location: ../../login.php");
	exit();
}

if (isset($_GET['index'])) {
	unset($_SESSION['products'][$_GET['index']]);
	header("Location: ../view/allProducts.php");
	exit();
}

header("Location: ../view/allProducts.php");
