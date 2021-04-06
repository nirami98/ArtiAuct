<?php 
	session_start();
	require 'dbconnect.php';

	if(isset($_GET['pid']))
	{
		$userid=$_SESSION['uid'];
		$postid=$_GET['pid'];
		$isactive = 1;
		$qry="INSERT INTO likestbl(userid, postid, isactive, doi) SELECT $userid, $postid, $isactive, NOW() FROM post_tbl WHERE EXISTS (select id from post_tbl where id=$postid) AND NOT EXISTS (SELECT id FROM likestbl WHERE userid=$userid AND postid=$postid) LIMIT 1";
		
		$rs=mysqli_query($conn, $qry);		
	}

	if($rs)
	{
		//echo "code succesful";	
		header("location:blog.php");
	}
	else
	{
		//echo "code unsuccesful";	
	}

?>