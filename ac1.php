<?php
session_start();
include "db_conn.php";
$uname= $_SESSION['user_name'];
$sql = "SELECT ac1 FROM users WHERE user_name='$uname'";

$resultac2 = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultac2) === 1) {
	$row = mysqli_fetch_assoc($resultac2);

	if ($row['ac1'] === "allowed") {
		header("Location: ./clue1/index.html");
	}else{
		header("Location: newly.php?error=access denied");
	}
}else{
	    header("Location: index.php?error=access denied");
}	

?>