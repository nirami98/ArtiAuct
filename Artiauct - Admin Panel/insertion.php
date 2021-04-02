<?php
	require 'dbconnect.php';
	var_dump($_GET);

	if (!isset($_GET['submit']))
	{
		header("location:registration.php");
		exit();
	}

	$fn = $_GET['fn'];
	$ln = $_GET['ln'];
	$pp = 'logo.png';
	$email = $_GET['email'];
	$password = $_GET['pass'];
	$cpassword = $_GET['cpass'];
	$mn = $_GET['mobile'];
	$gender = $_GET['gender'];
	$isactive = 1;
	$dt = date("Y-m-d");
	$usertype = 1;

	if($password!=$cpassword)
	{
		header("location:registration.php");
		exit();
	}

	//echo $fn . $ln . $email . $password . $gender . $mn

	$qry = "INSERT INTO user_tbl(firstname, lastname, profile_pic, email, password, mobilenum, gender, isactive, doi, usertype) VALUES ('".$fn."', '".$ln."','".$pp."', '".$email."', '".$password."', '".$mn."', '".$gender."', $isactive, '".$dt."', $usertype)";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		echo "Insertion Successful";
	}
	else
	{
		echo "Insertion Not Successful";
	}
?>