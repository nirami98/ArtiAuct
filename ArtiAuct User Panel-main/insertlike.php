<?php 
	session_start();
	require 'dbconnect.php';
	
	$qry = "SELECT * from post_tbl where isactive=1";
    $rs=mysqli_query($conn, $qry);
    $row=mysqli_fetch_assoc($rs);

	$userid = $_SESSION['uid'];
	$postid = $_GET['pid'];

	$qry = "INSERT INTO likes_tbl(postid, userid, doi) VALUES ($postid, $userid, NOW())";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		//echo "Insertion Successful";
		header("location:blog.php");
	}
	/*else
	{
		//echo "Insertion Not Successful";
		header("location:feedback.php");
	}*/
?>