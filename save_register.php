<?php
include("config.php");
$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST["txtUsername"])."' ";
$ObjQuery = mysqli_query($ObjCon,$strSQL);
$ObjResult= mysqli_fetch_array($ObjQuery);
if($ObjResult)
{
    echo"Username already exists!";
}
else
{
    $strSQL="INSERT INTO member (Username,Password,Name,Surname,Email,Faculty) 
        VALUES ('".$_POST["txtUsername"]."',
                '".$_POST["txtPassword"]."',
                '".$_POST["txtName"]."',
                '".$_POST["txtSurname"]."',
                '".$_POST["txtEmail"]."',
                '".$_POST["txtFaculty"]."')"; 
    $ObjQuery= mysqli_query($ObjCon,$strSQL);

    echo"Register Completed!<br>";
    echo"<br> Go to <a href='login.php'>Login page</a>";
}
mysqli_close($ObjCon);
?>