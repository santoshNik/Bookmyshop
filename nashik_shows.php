
<?php

session_start();

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
	<font size="+1"><b>Regimental Plaza, Nashik</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="regimental_nashik_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="regimental_nashik_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="regimental_nashik_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="regimental_nashik_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	<tr>
	<td>
	<font size="+1"><b>PVR, Nashik</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_nashik_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_nashik_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_nashik_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="pvr_nashik_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	<tr>
	<td>
	<font size="+1"><b>VijayMamta, Nashik</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="vijaymamta_nashik_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="vijaymamta_nashik_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="vijaymamta_nashik_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="vijaymamta_nashik_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	<tr>
	<td>
	<font size="+1"><b>Divya Carnival, Nashik</b></font>
	</td>
	<td>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="divyacarnival_nashik_8" value="08:00">08:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="divyacarnival_nashik_13" value="13:00">13:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="divyacarnival_nashik_20" value="20:00">20:00</button></a>
	<a href="seatmap1.php" role="button">
		<button class="btn btn-default" name="divyacarnival_nashik_23" value="23:00">23:00</button></a>
	</td>
	</tr>

	</table>
</form>
</body>
</html>

<?php

$badla=$_POST['badla'];
$romeo=$_POST['romeo'];
$junglee=$_POST['junglee'];
$kalank=$_POST['kalank'];
if($badla=="badla")
{
	$_SESSION['movie']="badla";
}
if($romeo=="romeo")
{
	$_SESSION['movie']="romeo";
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