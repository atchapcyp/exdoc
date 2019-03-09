<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php
	$objConnect = mysqli_connect("webservhost","nmpt_kuma","123456789");
	if($objConnect) {
		echo "Database Connected.";
	}
	else
		echo "Database Connect Failed.";

	mysqli_close($objConnect);
?>
</body>
</html>