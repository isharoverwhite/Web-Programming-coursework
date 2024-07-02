<?php 
include "includes/DatabaseConnection.php";

if ($output == "2") {
	echo "<script>alert('System Corrupted !');</script>";
} else {
	include "templates/login.html.php";
	

}


?>