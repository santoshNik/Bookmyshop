<?php
include_once("conn.php");
session_start();

/*switch($movie)
{
	case "shazam":
	
	case "kesari":
	$_SESSION['movie']="kesari";
	case "junglee":
	$_SESSION['movie']="junglee";
	case "kalank":
	$_SESSION['movie']="kalank";
}*/

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<form action="seatmap1.php" method="post">
	<table cellspacing="100px" width="50%" cellpadding="100px">
	<tr>
	<td>
	<font size="+1"><b>City Pride, Pune</b></font>
	</td>
	<td>
	
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="citypride_pune_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="citypride_pune_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="citypride_pune_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="citypride_pune_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	<tr>
	<td>
	<font size="+1"><b>E Square, Pune</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="esquare_pune_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="esquare_pune_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="esquare_pune_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="esquare_pune_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	<tr>
	<td>
	<font size="+1"><b>INOX, Pune</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="inox_pune_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="inox_pune_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="inox_pune_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="inox_pune_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	<tr>
	<td>
	<font size="+1"><b>PVR, Pune</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_pune_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_pune_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_pune_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_pune_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	</table>
</form>
</body>
</html>
<?php

$shazam=$_POST['shazam'];
$kesari=$_POST['kesari'];
$junglee=$_POST['junglee'];
$kalank=$_POST['kalank'];
if($shazam=="shazam")
{
	$_SESSION['movie']="shazam";
}
if($kesari=="kesari")
{
	$_SESSION['movie']="kesari";
}
if($junglee=="junglee")
{
	$_SESSION['movie']="junglee";
}
if($kalank=="kalank")
{
	$_SESSION['movie']="kalank";
}


?>