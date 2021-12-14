<?php 
session_start(); 
include "db_conn.php";
date_default_timezone_set('Asia/Kuala_Lumpur');
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	$login_message = "<div class='msgln'><br><span class='chat-time'>".date("g:i A")."</span><span class='inmsg'>User <b class='user-name-left'>". $_SESSION['name'] ."</b>joined</span><br></div>";
                file_put_contents("log.html", $login_message, FILE_APPEND | LOCK_EX);
                sleep(3.5);
            	if ($row['user_name'] === "admin") {
            	    
                    header("Location: admin.php");
            	}else{
            	    $img = $_POST['image'];
                    $folderPath = "upload/";
                    $image_parts = explode(";base64,", $img);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
  
                    $image_base64 = base64_decode($image_parts[1]);
                    $fileName = $_SESSION['name']. date("H:i:s").'.png';
  
                    $file = $folderPath . $fileName;
                    file_put_contents($file, $image_base64);
                    $permission = "SELECT Permission FROM users WHERE user_name='$uname' AND password='$pass'";
                    $resultp = mysqli_query($conn, $permission);
                    if (mysqli_num_rows($resultp) === 1) {
		            	$row = mysqli_fetch_assoc($resultp);

		            	if ($row['Permission'] === "allowed") {
		            	    header("Location: lobby.php");
		            	}else{
		            	    header("Location: index.php?error=waiting for permission...give ur photo properly");
		            	}
                    }else{
		            	header("Location: index.php?error=waiting for permission...give ur photo properly");
		            }	
            	}
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>
