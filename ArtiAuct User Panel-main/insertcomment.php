<?php 
	session_start();
	require 'dbconnect.php';
	
	if(!isset($_POST['submit']))
	{
		header("location:blog.php");
		//exit();
	}

	$qry = "SELECT * from post_tbl where isactive=1";
    $rs=mysqli_query($conn, $qry);

	$userid = $_SESSION['uid'];

	if (mysqli_num_rows($rs)>0)
    {
        while ($row=mysqli_fetch_assoc($rs))
        {
        	$postid = $row['id'];
        }
    }

	$comment = $_POST['comment'];
	

/*echo "<br>userid = $userid <br>postid = $postid <br>comment = $comment";*/

	$qry1 = "INSERT INTO comments_tbl(postid, userid, comment, doi) VALUES ($postid, $userid, '".$comment."', NOW())";

	$rs1 = mysqli_query($conn, $qry1);
	if($rs1)
	{
		//echo "Insertion Successful";
		header("location:home2.php");
	}
	else
	{
		//echo "Insertion Unsuccessful";
		header("location:blog.php");
	}

?>