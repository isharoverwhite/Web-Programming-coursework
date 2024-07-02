<?php
$username = "isha_ryzen30xx";
$password = "Mc#CozJ0NDNb40m0";
$dbname = "isha_coursework";
$address = "localhost";

try {
	$conn = new PDO("mysql:host=" . $address. ";dbname=" . $dbname, $username, $password);
	$output = "1";
} catch (PDOException $e) {
	$output = "2";
	$error = $e->getMessage();
}
?>