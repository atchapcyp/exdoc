<?php
	session_start();
	include("config.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($ObjCon,$_POST['txtUsername']) ."' and Password = '".mysqli_real_escape_string($ObjCon,$_POST['txtPassword'])."'";
	$ObjQuery = mysqli_query($ObjCon,$strSQL);

	if (!$ObjQuery) {
    printf("Error: %s\n", mysqli_error($ObjCon));
    exit();
}

	$ObjResult = mysqli_fetch_array($ObjQuery);

	if(!$ObjResult){
		header('location: https://webserv.kmitl.ac.th/nmpt/login.php?error=true');} //beware of the domain name!
		//echo "Username and Password Incorrect!";
	
	else {
		$_SESSION["UserID"] = $ObjResult["UserID"];
		$_SESSION["Status"] = $ObjResult["Status"];

		session_write_close();
		header('location:index.html');
	}

	mysqli_close($ObjCon);
?>
