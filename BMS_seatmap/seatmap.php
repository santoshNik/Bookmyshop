<?php
	//include_once("myconnection.php");
	$seat1=$_POST['btn1'];
	$seat2=$_POST['btn2'];
	$seat3=$_POST['btn3'];

	if($seat1)
	{
		$cnt1=0;
		echo "Seat no's :: ";
		foreach($seat1 as $s1)
		{
			$cnt1+=1;
			echo $s1.",";

		}
		echo " -----> Platinum :: ";
		echo $t1=300*$cnt1;
		echo "<br>";
		
	}

	if($seat2)
	{
		$cnt2=0;
		echo "Seat no's :: ";
		foreach($seat2 as $s2)
		{
			$cnt2+=1;
			echo $s2.",";

		}
		echo " -----> Gold :: ";
		echo $t2=200*$cnt2;
		echo "<br>";
	}

	if($seat3)
	{
		$cnt3=0;
		echo "Seat no's :: ";
		foreach($seat3 as $s3)
		{
			$cnt3+=1;
			echo $s3.",";

		}
		echo " -----> Silver :: ";
		echo $t3=100*$cnt3;
		echo "<br>";
	}

	$t=$t1+$t2+$t3;
	$cnt=$cnt1+$cnt2+$cnt3;
	echo "<h1><br><br>Total Tickets :: $cnt<br><br>Total Ticket Amount :: $t<h1>";
	
	echo '<button type="submit" name="submitbtn">Mail Ticket</button></div>';
?>