<?php
$con = mysqli_connect("localhost", "root", "", "developers");

// Check connection
if (!$con) {
    
	die("Connection failed: " . mysqli_connect_error());
}
?>
