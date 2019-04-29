<?php
include_once("conn.php");
$uname=$_POST[''];
$email=$_POST[''];
$city=$_POST[''];
$theatre=$_POST[''];
$movies=$_POST[''];
$shows=$_POST[''];
$seats=$_POST[''];
$amount=$_POST[''];

$sql="insert into bookmyshow.ticket_table values('".$uname."','".$email."','".$city."','".$theatre."','".$movies."','".$shows."','".$seats."','".$amount."')";
$q=mysqli_query($conn,$sql);
if($q)
{
	echo "1 row inserted";
}
else
{
	echo "failed";
}
?>