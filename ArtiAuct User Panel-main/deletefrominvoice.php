<?php 
	require 'dbconnect.php';
//	var_dump($_GET);

	$id=$_GET['did'];
	//echo $id;

	$qry="SELECT * from invoice_tbl where postid=$id";
	$rs=mysqli_query($conn, $qry);
	$row=mysqli_fetch_assoc($rs);
	$status=$row['isactive'];

	if($status==1)
	{
		$qry1="UPDATE invoice_tbl set isactive=0 where postid=$id";
		$qry2="UPDATE cart_tbl set isactive=0 where productid=$id";
		//echo $qry1;	
	}
	/*else
	{
		$qry1="UPDATE user_tbl set isactive=0 where id=$id";
		echo $qry1;
	}*/

	$rs1=mysqli_query($conn,$qry1);
	$rs2=mysqli_query($conn,$qry2);
	if($rs1)
	{
		//echo "Updated";
		header("home2.php");
		//exit();
	}
	else
	{
		//echo "Error";
		//search for how to display a kind of toast message of retry.
	}
?>