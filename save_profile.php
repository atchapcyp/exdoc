<?php
	session_start();
	include("config.php");
	if($_SESSION['UserID'] == ""){
		echo "Please Login!";
		exit();
	}

	if($_POST["txtPassword"] != $_POST["txtConPassword"]){
		echo "Password not Match!";
		exit();
	}

	$strSQL = "UPDATE member SET Password = '".trim($_POST['txtPassword']) ."',Name = '".trim($_POST['txtName']) ."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$ObjQuery = mysqli_query($ObjCon,$strSQL);

	echo "Save Completed!<br>";

	if($_SESSION["Status"] == "ADMIN"){
		echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
	}
	else{
		echo "<br> Go to <a href='user_page.php'>User page</a>";
	}

	mysqli_close($ObjCon);
?>