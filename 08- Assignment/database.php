<?php

header("content-type: application/json; charset=UTF-8");
header("access-allow-origin: *");

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'route_api';

$conn = mysqli_connect($host, $username, $password, $dbname);
