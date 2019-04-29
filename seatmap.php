<?php
	include_once("conn.php");
	session_start();
	$seat1=$_POST['btn1'];
	$seat2=$_POST['btn2'];
	$seat3=$_POST['btn3'];
	$str="";
	
	$un=$_SESSION['un'];
	$p=$_SESSION['email'];
	$city=$_SESSION['city'];
	$theatre=$_SESSION['theatre'];
	$shows=$_SESSION['shows'];
	$movie=$_SESSION['movie'];
	if($seat1)
	{
		$cnt1=0;
		echo "Seat no's :: ";
		foreach($seat1 as $s1)
		{
			//select * from ticket_table;
			//arr[6]==$s1
			//if(arr[7]=="V")


			$sql="insert into bookmyshow.ticket_table values('$un','$p','$city','$theatre','$movie','$shows','$s1',100,'B')";
			$query=mysqli_query($conn,$sql);
			/*if($query)
			{
				echo "<script>alert('Record Inserted')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}*/
			$cnt1+=1;
			echo $s1.",";
			$str=$str.$s1." ";

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
			$sql="insert into bookmyshow.ticket_table values('$un','$p','$city','$theatre','$movie','$shows','$s2',200,'B')";
			$query=mysqli_query($conn,$sql);
			/*if($query)
			{
				echo "<script>alert('Record Inserted')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}*/
			$cnt2+=1;
			echo $s2.",";
			$str=$str.$s2." ";
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
			$sql="insert into bookmyshow.ticket_table values('$un','$p','$city','$theatre','$movie','$shows','$s3',300,'B')";
			$query=mysqli_query($conn,$sql);
			/*if($query)
			{
				echo "<script>alert('Record Inserted')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}*/
			$cnt3+=1;
			echo $s3.",";
			$str=$str.$s3." ";

		}
		echo " -----> Silver :: ";
		echo $t3=100*$cnt3;
		echo "<br>";
	}
	$_SESSION['str']=$str;
	$t=$t1+$t2+$t3;
	$cnt=$cnt1+$cnt2+$cnt3;
	echo "<h1><br><br>Total Tickets :: $cnt<br><br>Total Ticket Amount :: $t<h1>";
	$total_seats=$_SESSION['str'];
	echo '<button type="submit" name="submitbtn">Mail Ticket</button></div>';
	/*if($seat1)
	{
		foreach($seat1 as $s1)
		{
			$sql="select * from ticket_table";
			$query=mysqli_query($conn,$sql);
			while($arr=mysqli_fetch_row($query))
			{
				if($arr[6]==$s1)
				{
					if(arr[7]=="V")
					{
						$flag=true;
						break;
					}
				}
			
			}
		}
	}*/
	

			
	
?>