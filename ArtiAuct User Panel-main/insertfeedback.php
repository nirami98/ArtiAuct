<?php 
	session_start();
	require 'dbconnect.php';
	var_dump($_POST);


	if(!isset($_POST['submit']))
	{
		header("location:feedback.php");
		//exit();
	}

	$userid = $_SESSION['uid'];
	$message = $_POST['message'];
	$isactive = 1;

	$qry = "INSERT INTO feedback_tbl(userid, feedbackmessage, isactive, doi, dou) VALUES ($userid, '".$message."', $isactive, NOW(), NOW())";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		//echo "Insertion Successful";
		header("location:home2.php");
	}
	else
	{
		//echo "Insertion Not Successful";
		header("location:feedback.php");
	}
?>