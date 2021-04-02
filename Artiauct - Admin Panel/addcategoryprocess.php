<!--
	File - 
	Description - This file adds the content added in the form to the category_tbl.
-->

<?php 
	require 'dbconnect.php';
	session_start();
	var_dump($_GET);

	if (!isset($_GET['submit']))
	{
		header("location:addcategory.php");
	}

	$categoryname = $_GET['categoryname'];
	$isactive = 1;
	$dt = date("Y-m-d");

	$qry = "INSERT INTO category_tbl(categoryname, isactive, doi) values ('".$categoryname."', $isactive, '".$dt."')";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		header("location:viewcategory.php");
	}
	else
	{
		header("location:addcategory.php");
	}
?>