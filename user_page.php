<?php
	session_start();
	include("config.php");

	if($_SESSION['UserID'] == ""){
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "USER"){
		echo "This page is for User only!";
		exit();
	}

	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$ObjQuery = mysqli_query($ObjCon, $strSQL);
	$ObjResult = mysqli_fetch_array($ObjQuery);
?>

<html>
	<body>
		Welcome to User Page! <br>
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
				<tr>
					<td> &nbsp;Surname</td>
					<td><?php echo $ObjResult["Surname"];?></td>
				</tr>
				<tr>
					<td> &nbsp;Email</td>
					<td><?php echo $ObjResult["Email"];?></td>
				</tr>
				<tr>
					<td> &nbsp;Faculty</td>
					<td><?php 
					switch ($ObjResult["Faculty"]) {
					case 'ENG':
						$ObjResult["Faculty"] = "Engineering";
						break;

					case 'ARCH':
						$ObjResult["Faculty"] = "Architecture";
						break;

					case 'IDED':
						$ObjResult["Faculty"] = "Industrial Education";
						break;

					case 'AGRI':
						$ObjResult["Faculty"] = "Agricultural Technology";
						break;

					case 'SCI':
						$ObjResult["Faculty"] = "Science";
						break;

					case 'AGEDU'://*
						$ObjResult["Faculty"] = "Industrial Education";
						break;

					case 'IT':
						$ObjResult["Faculty"] = "Information Technology";
						break;

					case 'IC':
						$ObjResult["Faculty"] = "International College";
						break;

					case 'NANO':
						$ObjResult["Faculty"] = "College of Nanotechnology";
						break;

					case 'AMI':
						$ObjResult["Faculty"] = "Advanced Manufacturing Innovationn";
						break;

					case 'AMC':
						$ObjResult["Faculty"] = "Administration and Management College";
						break;

					case 'AVIATION':
						$ObjResult["Faculty"] = "Aeronautical Engineering and Commercial Pilot";
						break;

					case 'LA':
						$ObjResult["Faculty"] = "Liberal Art";
						break;


					default:
						break;
				}echo $ObjResult["Faculty"];?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<a href = "edit_profile.php">Edit</a><br>
		<br>
		<a href="logout.php">Logout</a>
	</body>
</html>

<?php
	mysqli_close($ObjCon);
?>