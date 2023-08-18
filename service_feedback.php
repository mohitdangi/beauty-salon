<?php

session_start();
require_once "includes/dbconnection.php";
if (isset($_POST['submit']) && empty($_SESSION['user_email'])) {
	$name = $conn->real_escape_string($_POST['name']);
	$email = $conn->real_escape_string($_POST['email']);
	$comment = $conn->real_escape_string($_POST['comment']);

	$sql = "INSERT INTO feedback ";
	$sql .= "(pro_id, name, email, comment, status) VALUES ('0', '$name', '$email', '$comment', 0)";
	$run_sql = mysqli_query($conn, $sql);
	if ($run_sql) {
		echo "<script> alert('Thank you for your feedback..!!!!') </script>";
		echo "<script> location = 'reviews.php' </script>";
	} else echo $conn->error;
}
