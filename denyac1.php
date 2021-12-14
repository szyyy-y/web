<?php 
session_start(); 
include "db_conn.php";
$usernamef = $_POST['name'];
if (isset($_POST['name'])) {

	$sql = "UPDATE users SET ac1 = 'denied' WHERE name ='$usernamef' ";
	mysqli_query($conn, $sql);
	header("Location: admin.php");
	exit();
}else{
	header("Location: admin.php");
	exit();
}