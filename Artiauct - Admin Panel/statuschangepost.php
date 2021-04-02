<?php 
	require 'dbconnect.php';
	var_dump($_GET);

	$id=$_GET['id'];
	echo $id;

	$qry="SELECT * from post_tbl where id=$id";
	$rs=mysqli_query($conn, $qry);
	$row=mysqli_fetch_assoc($rs);

	$qry1="SELECT * from product_tbl where postid=$id";
	$rs1=mysqli_query($conn, $qry1);
	$row1=mysqli_fetch_assoc($rs1);
	
	$status=$row['isactive'];
	$isproduct=$row['isproduct']; /*post*/

	if($status==1)
	{
		$qry2="UPDATE post_tbl set isactive=0 where id=$id";
		$qry3="UPDATE post_tbl set isproduct=0 where id=$id";
		$qry4="UPDATE product_tbl set isactive=0 where postid=$id";

	}
	else
	{
		$qry2="UPDATE post_tbl set isactive=1 where id=$id";
	}

	$rs2=mysqli_query($conn,$qry2);
	$rs3=mysqli_query($conn,$qry3);
	$rs4=mysqli_query($conn,$qry4);
	if($rs2)
	{
		//echo "Updated";
		header("location:viewpost.php");
		//exit();
	}
	else
	{
		//echo "Error";
		//search for how to display a kind of toast message of retry.
	}
?>	