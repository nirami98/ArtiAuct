<?php 
	session_start();
	require 'dbconnect.php';
	/*var_dump($_POST);
	echo "<br>";
	var_dump($_GET);*/


	/*if(!isset($_POST['submit']))
	{
		header("location:feedback.php");
		//exit();
	}*/
	
	$productid = $_GET['pid'];
	$qry = "SELECT * from post_tbl where isactive=1 and id = $productid";
    $rs=mysqli_query($conn, $qry);
    $row=mysqli_fetch_assoc($rs);
    //<?php 
    /*if (mysqli_num_rows($rs)>0)
    {*/
     		//echo $row['id'];	
	/*echo "<br>";*/
	// echo $_GET['pid'];

	$userid = $_SESSION['uid'];
	//$postid = $_GET['pid'];
	//$message = $_POST['message'];
	$isactive = 1;
	$postpicture = $row['postpicture'];



	$qry1 = "INSERT INTO cart_tbl(productid, userid, postpicture, isactive, doi, dou) VALUES ($productid, $userid, '".$postpicture."', $isactive, NOW(), NOW())";

	$rs1 = mysqli_query($conn, $qry1);
	if($rs1)
	{
		//echo "Insertion Successful";
		header("location:cart.php");
	}
	else
	{
		//echo "Insertion Not Successful";
		header("location:collection-list-view.php");
	}
?>