<?php
$dbServername="localhost";
$dbUsername="root";
$dbpassword="";
$db = "data";

$conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$db);
// include('new.php');

$fn=$_POST['first'];
$ln=$_POST['last'];
$em=$_POST['email'];
$ui=$_POST['uid'];



$sql="INSERT INTO hickers (First_Name,Last_Name,Email,User_Id) 	
values('$fn','$ln','$em','$ui'); ";

if(isset($_POST['submit']))
{
	// echo " ay 7agaaaaaaaaa";
	if(empty($fn))
	{
		echo '<script>alert(" Empty First Name !")</script>';
		if (empty($ln))
		{
			echo '<script>alert(" Empty Last Name !")</script>';
			if (empty($em))
			{
				echo '<script>alert(" Empty Email !")</script>';
				if (empty($ui))
				{
					echo '<script>alert(" Empty ID !")</script>';
				}
			}
		}
	}
	else if(!filter_var($em,FILTER_VALIDATE_EMAIL))
	{
		echo '<script>alert(" Invalid E-Mail !")</script>';
	}
	else if(!preg_match("/^[a-zA-Z]*$/", $fn)||!preg_match("/^[a-zA-Z]*$/", $ln))
	{
		echo '<script>alert(" Invalid Characters !")</script>';
	}

	else{
		mysqli_query($conn,$sql);
		header("Location:../login.php?tagmy3a=success");
	}
	
}
else{
	header("Location:../login.php?login=error");
}

?>