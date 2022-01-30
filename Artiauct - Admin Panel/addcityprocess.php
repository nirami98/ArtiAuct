<!--
	File - 
	Description - This file adds the content added in the form to the city_tbl.
-->

<?php 
	require 'dbconnect.php';
	session_start();
	var_dump($_GET);

	if (!isset($_GET['submit']))
	{
		header("location:addcity.php");
	}

	$state_id = $_GET['state_id'];
	$cityname = $_GET['cityname'];
	$isactive = 1;
	$dt = date("Y-m-d");

	$qry = "INSERT INTO city_tbl(sid, cityname, isactive, doi) values ($state_id, '".$cityname."', $isactive, '".$dt."')";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		header("location:viewcity.php");
	}
	else
	{
		header("location:addcity.php");
	}
?>