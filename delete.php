<?php
session_start();
// PHP program to delete a file named gfg.txt 
// using unlike() function 
   
$file_pointer = $_SESSION['name']."log.html"; 
   
// Use unlink() function to delete a file 
if (!unlink($file_pointer)) { 
    echo ("$file_pointer cannot be deleted due to an error"); 
} 
else { 
    echo ("$file_pointer has been deleted"); 
} 
  
?> 