<?php
	session_start();
	include("config.php");
	if($_SESSION['UserID'] == ""){
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN"){
		echo "This page is for Admin only!";
		exit();
	}

	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."'";
	$ObjQuery = mysqli_query($ObjCon,$strSQL);
	$ObjResult = mysqli_fetch_array($ObjQuery,MYSQLI_ASSOC);
?>

<html>
	<body>
		Welcome to Admin Page! <br>
		<table border="1" style="width: 300px">
		<tbody>
			<tr>
				<td width="87"> &nbsp;Username</td>
				<td width="197"><?php echo $ObjResult["Username"];?></td>
			</tr>
			<tr>
				<td> &nbsp;Name</td>
				<td><?php echo $ObjResult["Name"];?></td>
			</tr>
		</tbody>
		</table>
		<br>
		<a href="edit_profile.php">Edit</a><br>
		<br>
		<a href="logout.php">Logout</a>
	</body>
</html>

<?php
	mysqli_close($ObjCon);
?>