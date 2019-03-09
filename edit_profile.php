<?php
	session_start();
	include("config.php");
	if($_SESSION['UserID'] == ""){
		echo "Please Login!";
		exit();
	}
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$ObjQuery = mysqli_query($ObjCon,$strSQL);
	$ObjResult = mysqli_fetch_array($ObjQuery);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	<form name="form1" method="post" action="save_profile.php">
	Edit Profile! <br>
		<table width="400" border="1" style="width: 400px">
			<tbody>
				<tr>
					<td width="125"> &nbsp;UserID</td>
					<td width="180"><?php echo $ObjResult["UserID"];?></td>
				</tr>
				<tr>
					<td> &nbsp;Username</td>
					<td><?php echo $ObjResult["Username"];?></td>
				</tr>
				<tr>
					<td> &nbsp;Password</td>
					<td><input name="txtPassword" type="Password" id="txtPassword" value="<?php echo $ObjResult["Password"];?>"></td>
				</tr>
				<tr>
					<td> &nbsp;Confirm Password</td>
					<td><input name="txtConPassword" type="Password" id="txtConPassword" value="<?php echo $ObjResult["Password"];?>"></td>
				</tr>
				<tr>
					<td> &nbsp;Name</td>
					<td><input name="txtName" type="text" id="txtName" value="<?php echo $ObjResult["Name"];?>"></td>
				</tr>
				<tr>
					<td> &nbsp;Status</td>
					<td><?php echo $ObjResult["Status"];?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<input type="submit" name="Submit" value="Save">
	</form>
</body>
</html>

<?php
	mysqli_close($ObjCon);
?>