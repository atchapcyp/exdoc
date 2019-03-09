<?php
include("config.php");
//check connection
if (!$ObjCon) {
	die("Connection failed: " .mysqli_connect_error());
}
echo "Connected successfully";
?>