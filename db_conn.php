<?php

$sname= "localhost";
$unmae="id17761947_admin";
$password="Unicorn@182573";
$db_name="id17761947_mem";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}