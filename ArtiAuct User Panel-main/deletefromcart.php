<?php 
	require 'dbconnect.php';
//	var_dump($_GET);

	$id=$_GET['did'];
	//echo $id;

	$qry="SELECT * from cart_tbl where id=$id";
	$rs=mysqli_query($conn, $qry);
	$row=mysqli_fetch_assoc($rs);
	$status=$row['isactive'];

	if($status==1)
	{
		$qry1="UPDATE cart_tbl set isactive=0 where id=$id";
		//echo $qry1;	
	}
	/*else
	{
		$qry1="UPDATE user_tbl set isactive=0 where id=$id";
		echo $qry1;
	}*/

	$rs1=mysqli_query($conn,$qry1);
	if($rs1)
	{
		//echo "Updated";
		header("location:home2.php");
		//exit();
	}
	else
	{
		//echo "Error";
		//search for how to display a kind of toast message of retry.
	}
?>