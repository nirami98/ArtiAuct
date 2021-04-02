<?php 
	require 'dbconnect.php';
	session_start();
	//var_dump($_POST);
	if(!isset($_POST["signin_btn"]))
	{
		header("location:index.php");
		exit();
	}

	$email=$_POST['email'];
	$password=$_POST['password'];

	$qry = "SELECT * FROM user_tbl WHERE email='".$email."' OR username='".$email."' AND password='".$password."' AND isactive=1 AND usertype=1";
	//echo $qry;

	$rs=mysqli_query($conn, $qry);
	//exit();
	if(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$_SESSION['id']=$row['id'];
		$_SESSION['fn']=$row['firstname'];
		if(isset($_POST['remember']))
		{
			setcookie("email", $email, time()+(86400*30), "/");
			setcookie("password", $password, time()+(86400*30), "/");
		}

		header("location:dashboard.php");
		exit();
	}
	else
	{
		//echo "Invalid Login";
		header("location:index.php");
	}
?>