<?php

$sname= "127.0.0.1";
$unmae= "root";
$password = "";

$db_name = "laundry_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed: " . $e->getMessage();
}