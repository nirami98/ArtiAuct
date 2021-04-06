<?php 
	session_start();
	require 'dbconnect.php';
	var_dump($_POST);


	if(!isset($_POST['submit']))
	{
		header("location:reset-password.php");
		//exit();
	}

	$userid = $_SESSION['uid'];
	$password = $_POST['newp'];
	

	$qry = "UPDATE user_tbl set password=$password where id=$userid";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		//echo "Insertion Successful";
		header("location:home2.php");
	}
	else
	{
		//echo "Insertion Not Successful";
		//exit();
		header("location:reset-password.php");
	}
?>