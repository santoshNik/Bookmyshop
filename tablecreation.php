<?php
include("conn.php");
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password1"];
$mobile=$_POST["mobile"];

$sql="create table bookmyshow.login(username varchar(20),password varchar(20),email varchar(20),mobile varchar(10))";
if(mysqli_query($conn,$sql))
echo "<br>table created<br>";
else
echo "not created";
?>