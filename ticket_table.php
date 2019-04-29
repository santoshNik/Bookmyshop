<?php
include_once("conn.php");
session_start();

$sql= "create table bookmyshow.ticket_table(uname varchar(40), email varchar(40), city varchar(40), theatre varchar(40), movies varchar(40), shows varchar(40), seats varchar(40), amount varchar(40), status char(1))";
$q=mysqli_query($conn,$sql);
if($q)
{
	echo "table created";
}
else
{
	echo "failed";
}
?>