<?php
	include_once("conn.php");
	session_start();
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/seatmap.css">
	<script>
	
	</script>
</head>
<body>
	<section id="seatmap">
		<form method="post" action="seatmap.php">
			<div class="stable">
			<table class="seattable" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>

					<td class="r1">
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a1" id="a1"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a2" id="a2"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a3" id="a3"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a4" id="a4"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a5" id="a5"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a6" id="a6"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a7" id="a7"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a8" id="a8"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a9" id="a9"></div>
						<div class="seatI"><input type="checkbox" name="btn1[]" value="a10" id="a10"></div>
					</td>
					<td>&nbsp;A</td>
				</tr>

			<tr class="r2" >
				
				<td>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b1" id="b1"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b2" id="b2"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b3" id="b3"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b4" id="b4"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b5" id="b5"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b6" id="b6"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b7" id="b7"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b8" id="b8"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b9" id="b9"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="b10" id="b10"></div>
				</td>
				<td>&nbsp;B</td>
			</tr>

			<tr>
				
				<td class="r3">
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c1" id="c1"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c2" id="c2"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c3" id="c3"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c4" id="c4"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c5" id="c5"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c6" id="c6"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c7" id="c7"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c8" id="c8"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c9" id="c9"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="c10" id="c10"></div>
				</td>
				<td>&nbsp;C</td>
			</tr>

			<tr>
				
				<td class="r4">
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d1" id="d1"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d2" id="d2"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d3" id="d3"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d4" id="d4"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d5" id="d5"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d6" id="d6"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d7" id="d7"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d8" id="d8"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d9" id="d9"></div>
					<div class="seatI"><input type="checkbox" name="btn2[]" value="d10" id="d10"></div>
				</td>
				<td>&nbsp;D</td>
			</tr>

			<tr>
	
				<td class="r5">
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e1" id="e1"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e2" id="e2"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e3" id="e3"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e4" id="e4"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e5" id="e5"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e6" id="e6"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e7" id="e7"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e8" id="e8"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e9" id="e9"></div>
					<div class="seatI"><input type="checkbox" name="btn3[]" value="e10" id="e10"></div>
				</td>
				<td>&nbsp;E</td>
			</tr>
		</tbody>
		
	</table>
	</div>

		<button class="btn" type="submit" name="submitbtn" id="sendNewSms">Confirm Seats</button>

	</form>
	</section>
			
	<?php
	//include_once("conn.php");
	
	
	//session_start();
	
	
	$time2=$_POST['citypride_pune_13'];
	$time1=$_POST['citypride_pune_8'];
	$time3=$_POST['citypride_pune_20'];
	$time4=$_POST['citypride_pune_23'];
	$time5=$_POST['esquare_pune_8'];
	$time6=$_POST['esquare_pune_13'];
	$time7=$_POST['esquare_pune_20'];
	$time8=$_POST['esquare_pune_23'];
	$time9=$_POST['inox_pune_8'];
	$time10=$_POST['inox_pune_13'];
	$time11=$_POST['inox_pune_20'];
	$time12=$_POST['inox_pune_23'];
	$time13=$_POST['pvr_pune_8'];
	$time14=$_POST['pvr_pune_13'];
	$time15=$_POST['pvr_pune_20'];
	$time16=$_POST['pvr_pune_23'];

	$time17=$_POST['inox_mum_8'];
	$time18=$_POST['inox_mum_13'];
	$time19=$_POST['inox_mum_20'];
	$time20=$_POST['inox_mum_23'];
	$time21=$_POST['pvr_mum_8'];
	$time22=$_POST['pvr_mum_13'];
	$time23=$_POST['pvr_mum_20'];
	$time24=$_POST['pvr_mum_23'];
	$time25=$_POST['zone_mum_8'];
	$time26=$_POST['zone_mum_13'];
	$time27=$_POST['zone_mum_20'];
	$time28=$_POST['zone_mum_23'];
	$time29=$_POST['laxmi_mum_8'];
	$time30=$_POST['laxmi_mum_13'];
	$time31=$_POST['laxmi_mum_20'];
	$time32=$_POST['laxmi_mum_23'];

	$time33=$_POST['regimental_nashik_8'];
	$time34=$_POST['regimental_nashik_13'];
	$time35=$_POST['regimental_nashik_20'];
	$time36=$_POST['regimental_nashik_23'];
	$time37=$_POST['pvr_nashik_8'];
	$time38=$_POST['pvr_nashik_13'];
	$time39=$_POST['pvr_nashik_20'];
	$time40=$_POST['pvr_nashik_13'];
	$time41=$_POST['vijaymamta_nashik_8'];
	$time42=$_POST['vijaymamta_nashik_13'];
	$time43=$_POST['vijaymamta_nashik_20'];
	$time44=$_POST['vijaymamta_nashik_23'];
	$time45=$_POST['divyacarnival_nashik_8'];
	$time46=$_POST['divyacarnival_nashik_13'];
	$time47=$_POST['divyacarnival_nashik_20'];
	$time48=$_POST['divyacarnival_nashik_23'];

	$time49=$_POST['inox_nag_8'];
	$time50=$_POST['inox_nag_13'];
	$time51=$_POST['inox_nag_20'];
	$time52=$_POST['inox_nag_23'];
	$time53=$_POST['pvr_nag_8'];
	$time54=$_POST['pvr_nag_13'];
	$time55=$_POST['pvr_nag_20'];
	$time56=$_POST['pvr_nag_23'];
	$time57=$_POST['cinemax_nag_8'];
	$time58=$_POST['cinemax_nag_13'];
	$time59=$_POST['cinemax_nag_20'];
	$time60=$_POST['cinemax_nag_23'];
	$time61=$_POST['panchshil_nag_8'];
	$time62=$_POST['panchshil_nag_13'];
	$time63=$_POST['panchshil_nag_20'];
	$time64=$_POST['panchshil_nag_23'];

	if($time1)//=$_POST['citypride_pune_8'];)
	{
		
		$city="Pune";
		$theatre="citypride pune";
		$shows="08:00";
		
	}
	if($time2)//=$_POST['citypride_pune_8'];)
	{
		$city="Pune";
		$theatre="citypride pune";
		$shows="13:00";
		//$_SESSION['city']=$city;
	}
	if($time3)//=$_POST['citypride_pune_8'];)
	{
		$city="Pune";
		$theatre="citypride pune";
		$shows="20:00";
		//$_SESSION['city']=$city;
	}
	if($time4)//=$_POST['citypride_pune_8'];)
	{
		$city="Pune";
		$theatre="citypride pune";
		$shows="22:00";
		//$_SESSION['city']=$city;
	}
	if($time5)//esquare_pune_8
	{
		$city="Pune";
		$theatre="E Square pune";
		$shows="08:00";
	}
	if($time6)//esquare_pune_8
	{
		$city="Pune";
		$theatre="E Square pune";
		$shows="13:00";
	}
	if($time7)//esquare_pune_8
	{
		$city="Pune";
		$theatre="E Square pune";
		$shows="20:00";
	}
	if($time8)//esquare_pune_8
	{
		$city="Pune";
		$theatre="E Square pune";
		$shows="22:00";
	}
	if($time9)//inox_pune_8
	{
		$city="Pune";
		$theatre="Inox pune";
		$shows="08:00";
	}
	if($time10)//inox_pune_8
	{
		$city="Pune";
		$theatre="Inox pune";
		$shows="13:00";
	}
	if($time11)//inox_pune_8
	{
		$city="Pune";
		$theatre="Inox pune";
		$shows="20:00";
	}
	if($time12)//inox_pune_8
	{
		$city="Pune";
		$theatre="Inox pune";
		$shows="22:00";
	}
	if($time13)//pvr_pune_8
	{
		$city="Pune";
		$theatre="PVR pune";
		$shows="08:00";
	}
	if($time14)//pvr_pune_8
	{
		$city="Pune";
		$theatre="PVR pune";
		$shows="13:00";
	}
	if($time15)//pvr_pune_8
	{
		$city="Pune";
		$theatre="PVR pune";
		$shows="20:00";
	}
	if($time16)//pvr_pune_8
	{
		$city="Pune";
		$theatre="PVR pune";
		$shows="22:00";
	}
	if($time17)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="INOX Mumbai";
		$shows="08:00";
	}
	if($time18)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="INOX Mumbai";
		$shows="13:00";
	}
	if($time19)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="INOX Mumbai";
		$shows="20:00";
	}
	if($time20)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="INOX Mumbai";
		$shows="22:00";
	}
	if($time21)//pvr_mum_
	{
		$city="Mumbai";
		$theatre="PVR Mumbai";
		$shows="08:00";
	}
	if($time22)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="PVR Mumbai";
		$shows="13:00";
	}
	if($time23)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="PVR Mumbai";
		$shows="20:00";
	}
	if($time24)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="PVR Mumbai";
		$shows="22:00";
	}
	if($time25)//zone_mum
	{
		$city="Mumbai";
		$theatre="The Zone Mumbai";
		$shows="08:00";
	}
	if($time26)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="The Zone Mumbai";
		$shows="13:00";
	}
	if($time27)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="The Zone Mumbai";
		$shows="20:00";
	}
	if($time28)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="The Zone Mumbai";
		$shows="22:00";
	}
	if($time29)//laxmi_mum
	{
		$city="Mumbai";
		$theatre="Laxminarayan Mumbai";
		$shows="08:00";
	}
	if($time30)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="Laxminarayan Mumbai";
		$shows="13:00";
	}
	if($time31)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="Laxminarayan Mumbai";
		$shows="20:00";
	}
	if($time32)//inox_mum_8
	{
		$city="Mumbai";
		$theatre="Laxminarayan Mumbai";
		$shows="22:00";
	}
	if($time33)//regimental_nashik_
	{
		$city="Nashik";
		$theatre="Regimental Nashik";
		$shows="08:00";
	}
	if($time34)//inox_mum_8
	{
		$city="Nashik";
		$theatre="Regimental Nashik";
		$shows="13:00";
	}
	if($time35)//inox_mum_8
	{
		$city="Nashik";
		$theatre="Regimental Nashik";
		$shows="20:00";
	}
	if($time36)//inox_mum_8
	{
		$city="Nashik";
		$theatre="Regimental Nashik";
		$shows="22:00";
	}
	if($time37)//inox_mum_8
	{
		$city="Nashik";
		$theatre="PVR Nashik";
		$shows="08:00";
	}
	if($time38)//inox_mum_8
	{
		$city="Nashik";
		$theatre="PVR Nashik";
		$shows="13:00";
	}
	if($time39)//inox_mum_8
	{
		$city="Nashik";
		$theatre="PVR Nashik";
		$shows="20:00";
	}
	if($time40)//pvr_nashik
	{
		$city="Nashik";
		$theatre="PVR Nashik";
		$shows="22:00";
	}
	if($time41)//vijaymamta_nashik_8
	{
		$city="Nashik";
		$theatre="Vijay-Mamta Nashik";
		$shows="08:00";
	}
	if($time42)//pvr_nashik
	{
		$city="Nashik";
		$theatre="Vijay-Mamta Nashik";
		$shows="13:00";
	}
	if($time43)//pvr_nashik
	{
		$city="Nashik";
		$theatre="Vijay-Mamta Nashik";
		$shows="20:00";
	}
	if($time44)//pvr_nashik
	{
		$city="Nashik";
		$theatre="Vijay-Mamta Nashik";
		$shows="22:00";
	}
	if($time45)//divyacarnival_nashik_8
	{
		$city="Nashik";
		$theatre="Divya Carnival Nashik";
		$shows="08:00";
	}
	if($time46)//divyacarnival_nashik_8
	{
		$city="Nashik";
		$theatre="Divya Carnival Nashik";
		$shows="13:00";
	}
	if($time47)//pdivyacarnival_nashik_8
	{
		$city="Nashik";
		$theatre="Divya Carnival Nashik";
		$shows="20:00";
	}
	if($time48)//divyacarnival_nashik_8
	{
		$city="Nashik";
		$theatre="Divya Carnival Nashik";
		$shows="22:00";
	}
	if($time49)//inox_nag_8
	{
		$city="Nagpur";
		$theatre="INOX Nagpur";
		$shows="08:00";
	}
	if($time50)//inox_nag_8
	{
		$city="Nagpur";
		$theatre="INOX Nagpur";
		$shows="13:00";
	}
	if($time51)//inox_nag_8
	{
		$city="Nagpur";
		$theatre="INOX Nagpur";
		$shows="20:00";
	}
	if($time52)//inox_nag_8
	{
		$city="Nagpur";
		$theatre="INOX Nagpur";
		$shows="22:00";
	}
	if($time53)//pvr_nag_8
	{
		$city="Nagpur";
		$theatre="PVR Nagpur";
		$shows="08:00";
	}
	if($time54)//pvr_nag_8
	{
		$city="Nagpur";
		$theatre="PVR Nagpur";
		$shows="13:00";
	}
	if($time55)//pvr_nag_8
	{
		$city="Nagpur";
		$theatre="PVR Nagpur";
		$shows="20:00";
	}
	if($time56)//pvr_nag_8
	{
		$city="Nagpur";
		$theatre="PVR Nagpur";
		$shows="22:00";
	}
	if($time57)//cinemax_nag_8
	{
		$city="Nagpur";
		$theatre="Cinemax Nagpur";
		$shows="08:00";
	}
	if($time58)//cinemax_nag_8
	{
		$city="Nagpur";
		$theatre="Cinemax Nagpur";
		$shows="13:00";
	}
	if($time59)//cinemax_nag_8
	{
		$city="Nagpur";
		$theatre="Cinemax Nagpur";
		$shows="20:00";
	}
	if($time60)//cinemax_nag_8
	{
		$city="Nagpur";
		$theatre="Cinemax Nagpur";
		$shows="22:00";
	}
	if($time61)//panchshil_nag_8
	{
		$city="Nagpur";
		$theatre="Panchshil Nagpur";
		$shows="08:00";
	}
	if($time62)//panchshil_nag_8
	{
		$city="Nagpur";
		$theatre="Panchshil Nagpur";
		$shows="13:00";
	}
	if($time63)//panchshil_nag_8
	{
		$city="Nagpur";
		$theatre="Panchshil Nagpur";
		$shows="20:00";
	}
	if($time64)//panchshil_nag_8
	{
		$city="Nagpur";
		$theatre="Panchshil Nagpur";
		$shows="22:00";
	}

	
	
	
	
		$_SESSION['city']=$city;
		$_SESSION['theatre']=$theatre;
		$_SESSION['shows']=$shows;


		$sql="select * from bookmyshow.ticket_table";
	$query=mysqli_query($conn,$sql);
	while($arr=mysqli_fetch_row($query))
	{
		if($arr[6]=="a1")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a1').disabled=true;</script>";
			}
		}
		if($arr[6]=="a2")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a2').disabled=true;</script>";
			}
		}
		if($arr[6]=="a3")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a3').disabled=true;</script>";
			}
		}
		if($arr[6]=="a4")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a4').disabled=true;</script>";
			}
		}
		if($arr[6]=="a5")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a5').disabled=true;</script>";
			}
		}
		if($arr[6]=="a6")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a6').disabled=true;</script>";
			}
		}
		if($arr[6]=="a7")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a7').disabled=true;</script>";
			}
		}
		if($arr[6]=="a8")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a8').disabled=true;</script>";
			}
		}
		if($arr[6]=="a9")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a9').disabled=true;</script>";
			}
		}
		if($arr[6]=="a10")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('a10').disabled=true;</script>";
			}
		}
		if($arr[6]=="b1")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b1').disabled=true;</script>";
			}
		}
		if($arr[6]=="b2")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b2').disabled=true;</script>";
			}
		}
		if($arr[6]=="b3")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b3').disabled=true;</script>";
			}
		}
		if($arr[6]=="b4")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b4').disabled=true;</script>";
			}
		}
		if($arr[6]=="b5")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b5').disabled=true;</script>";
			}
		}
		if($arr[6]=="b6")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b6').disabled=true;</script>";
			}
		}
		if($arr[6]=="b7")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b7').disabled=true;</script>";
			}
		}
		if($arr[6]=="b8")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b8').disabled=true;</script>";
			}
		}
		if($arr[6]=="b9")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b9').disabled=true;</script>";
			}
		}
		if($arr[6]=="b10")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('b10').disabled=true;</script>";
			}
		}
		if($arr[6]=="c1")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c1').disabled=true;</script>";
			}
		}
		if($arr[6]=="c2")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c2').disabled=true;</script>";
			}
		}
		if($arr[6]=="c3")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c3').disabled=true;</script>";
			}
		}
		if($arr[6]=="c4")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c4').disabled=true;</script>";
			}
		}
		if($arr[6]=="c5")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c5').disabled=true;</script>";
			}
		}
		if($arr[6]=="c6")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c6').disabled=true;</script>";
			}
		}
		if($arr[6]=="c7")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c7').disabled=true;</script>";
			}
		}
		if($arr[6]=="c8")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c8').disabled=true;</script>";
			}
		}
		if($arr[6]=="c9")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c9').disabled=true;</script>";
			}
		}
		if($arr[6]=="c10")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('c10').disabled=true;</script>";
			}
		}
		if($arr[6]=="d1")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d1').disabled=true;</script>";
			}
		}
		if($arr[6]=="d2")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d2').disabled=true;</script>";
			}
		}
		if($arr[6]=="d3")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d3').disabled=true;</script>";
			}
		}
		if($arr[6]=="d4")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d4').disabled=true;</script>";
			}
		}
		if($arr[6]=="d5")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d5').disabled=true;</script>";
			}
		}
		if($arr[6]=="d6")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d6').disabled=true;</script>";
			}
		}
		if($arr[6]=="d7")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d7').disabled=true;</script>";
			}
		}
		if($arr[6]=="d8")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d8').disabled=true;</script>";
			}
		}
		if($arr[6]=="d9")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d9').disabled=true;</script>";
			}
		}
		if($arr[6]=="d10")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('d10').disabled=true;</script>";
			}
		}
		if($arr[6]=="e1")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e1').disabled=true;</script>";
			}
		}
		if($arr[6]=="e2")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e2').disabled=true;</script>";
			}
		}
		if($arr[6]=="e3")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e3').disabled=true;</script>";
			}
		}
		if($arr[6]=="e4")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e4').disabled=true;</script>";
			}
		}
		if($arr[6]=="e5")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e5').disabled=true;</script>";
			}
		}
		if($arr[6]=="e6")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e6').disabled=true;</script>";
			}
		}
		if($arr[6]=="e7")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e7').disabled=true;</script>";
			}
		}
		if($arr[6]=="e8")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e8').disabled=true;</script>";
			}
		}
		if($arr[6]=="e9")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e9').disabled=true;</script>";
			}
		}
		if($arr[6]=="e10")
		{
			if($arr[8]=="B")
			{
				echo "<script>document.getElementById('e10').disabled=true;</script>";
			}
		}

		
	}
	?>
	
	  
</body>
</html>