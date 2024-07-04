<?php 
include "includes/DatabaseConnection.php";

if ($output == "2") {
	echo "<script>alert('System Corrupted !');</script>";
} else {
	include "templates/login.html.php";

	if (isset($_POST['login_btn'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "FROM users WHERE username = '$username'";
		$result = $conn->query($sql);
		if ($result-> num_rows > 0) {
			$row = $result-> fetch_assoc();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['username'] = $row['email'];
			header("Location: home.php");
		} else {
			echo "<script>alert('Invalid Username or Password !');</script>";
		}
	}


}


?>