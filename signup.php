<?php
include_once("conn.php");
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password1"];
$mobile=$_POST["mobile"];
$sql="insert into bookmyshow.login values('".$username."','".$password."','".$email."','".$mobile."')";
mysqli_query($conn,$sql);
if($sql)
{
	include("registersuccess.php");
}
else
{
	echo "failed";
}
?>