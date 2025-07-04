<?php

session_start();

if (!isset($_SESSION['admin_login']) || !$_SESSION['admin_login']) {
	header("Location: ../../login.php");
	exit();
}

include "header.php";
include "sidebar.php";
include "body.php";
include "navbar.php";
include "footer.php";
