<?php 
	require 'dbconnect.php';
	var_dump($_GET);

	$id=$_GET['id'];
	echo $id;

	$qry="SELECT * from challenge_tbl where id=$id";
	$rs=mysqli_query($conn, $qry);
	$row=mysqli_fetch_assoc($rs);
	$status=$row['isactive'];

	if($status==0)
	{
		$qry1="UPDATE challenge_tbl set isactive=1 where id=$id";
		echo $qry1;	
	}
	else
	{
		$qry1="UPDATE challenge_tbl set isactive=0 where id=$id";
		echo $qry1;
	}

	$rs1=mysqli_query($conn,$qry1);
	if($rs1)
	{
		//echo "Updated";
		header("location:viewchallenge.php");
		//exit();
	}
	else
	{
		//echo "Error";
		//search for how to display a kind of toast message of retry.
	}
?>