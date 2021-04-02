<?php 
	require 'dbconnect.php';
	//var_dump($_GET);

	$id=$_GET['id'];
	//echo $id;

	

	$qry1="SELECT * from product_tbl where id=$id";
	$rs1=mysqli_query($conn, $qry1);
	$row1=mysqli_fetch_assoc($rs1);
	
	$status=$row1['isactive'];
	$postid=$row1['postid']; /*post*/

	$qry="SELECT * from post_tbl where id=$postid";
	$rs=mysqli_query($conn, $qry);
	$row=mysqli_fetch_assoc($rs);

	if($status==1)
	{
		$qry2="UPDATE post_tbl set isproduct=0 where id=$postid";
		$qry3="UPDATE product_tbl set isactive=0 where id=$id";
	}
	else
	{
		$qry2="UPDATE post_tbl set isproduct=1 where id=$postid";
		$qry3="UPDATE product_tbl set isactive=1 where id=$id";
	}

	$rs2=mysqli_query($conn,$qry2);
	$rs3=mysqli_query($conn,$qry3);
	if($rs2)
	{
		//echo "Updated";
		header("location:viewproductdetails.php");
		//exit();
	}
	else
	{
		//echo "Error";
		//search for how to display a kind of toast message of retry.
	}
?>