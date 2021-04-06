<?php 
	session_start();
	require 'dbconnect.php';
	/*var_dump($_POST);
	echo "<br>";
	var_dump($_GET);*/


	if(!isset($_POST['submit']))
	{
		header("location:svn_checkout(repos, targetpath).php");
		//exit();
	}
	
	//$productid = $_GET['pid'];
	$qry = "SELECT * from cart_tbl where isactive=1";
    $rs=mysqli_query($conn, $qry);
    $row=mysqli_fetch_assoc($rs);
    //<?php 
    /*if (mysqli_num_rows($rs)>0)
    {*/
     		//echo $row['id'];	
	/*echo "<br>";*/
	// echo $_GET['pid'];

	$userid = $row['userid'];
	$postid = $row['productid'];
	//$message = $_POST['message'];
	$isactive = 1;
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	//$postpicture = $row['postpicture'];



	$qry1 = "INSERT INTO invoice_tbl(userid, postid, email, firstname, lastname, address, isactive, doi) VALUES ($userid, $postid, '".$email."', '".$firstname."', '".$lastname."', '".$address."', $isactive, NOW())";

	$rs1 = mysqli_query($conn, $qry1);
	if($rs1)
	{
		//echo "Insertion Successful";
		header("location:invoice.php");
	}
	else
	{
		//echo "Insertion Not Successful";
		header("location:checkout.php");
	}
?>