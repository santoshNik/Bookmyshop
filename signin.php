<?php
session_start();
$un=$_POST['uname'];
$p=$_POST['p'];
include("conn.php");

$sql="select * from bookmyshow.login";
$query=mysqli_query($conn,$sql);

while($arr=mysqli_fetch_row($query))
{
	if($arr[0]==$un)
	{
		
		if($p==$arr[1])
		{
		//echo "Valid Username";
		$_SESSION['un']=$un;
		$_SESSION['email']=$arr[2];
		$flag=true;
		include("index2.php");
		break;
		}
		else
		{
			//echo "Password does not matched!!!";
			include("Resign.html");
			break;
		}
	}
	else if($p==$arr[1])
	{
		
		if($arr[0]==$un)
		{
		//echo "Valid Username";
		$_SESSION['un']=$un;
		$_SESSION['email']=$arr[2];
			$flag=true;
			include("index2.php");
		break;
		}
		else
		{
			//echo "Username does not matched!!!";
			include("Resign.html");
			break;
		}
	}
	/*else if($arr[2]==$un)
	{
		if($p==$arr[1])
		{
		//echo "Valid Email ID";
			include("index2.php");
		break;
		}
		else
		{
			//echo "Password does not matched!!!";
			include("Resign.html");
			break;
		}
	}
	else if($p==$arr[1])
	{
		if($arr[2]==$un)
		{
		//echo "Valid Email ID";
			include("index2.php");
		break;
		}
		else
		{
			//echo "Email id does not matched!!!";
			include("Resign.html");
			break;
		}
	}
	else if($arr[3]==$un)
	{
		if($p==$arr[1])
		{
		//echo "Valid Mobile";
			include("index2.php");
		break;
		}
		else
		{
			//echo "Password does not matched!!!";
			include("Resign.html");
			break;
		}
	}
	else if($p==$arr[1])
	{
		if($arr[3]==$un)
		{
		//echo "Valid Mobile Number";
			include("index2.php");
		break;
		}
		else
		{
			//echo "Mobile Number does not matched!!!";
			include("Resign.html");
			break;
		}
	}*/
	else if(($p==$arr[1]) && ($arr[3]==$un))
	{
		
			//echo "Mobile Number does not matched!!!";
			$_SESSION['un']=$un;
		$_SESSION['email']=$arr[2];
			$flag=true;
			include("index2.php");
		
	}
	
	
}

if($flag==false)
{
	include("Resign.html");
}
?>





