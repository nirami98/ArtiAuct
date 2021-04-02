<!--
	File - 
	Description - This file adds the content added in the form to the state_tbl.
-->

<?php 
	require 'dbconnect.php';
	session_start();
	var_dump($_GET);

	if (!isset($_GET['submit']))
	{
		header("location:addstate.php");
	}

	$statename = $_GET['statename'];
	$isactive = 1;
	$dt = date("Y-m-d");

	$qry = "INSERT INTO state_tbl(statename, isactive, doi) values ('".$statename."', $isactive, '".$dt."')";

	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		header("location:viewstate.php");
	}
	else
	{
		header("location:addstate.php");
	}
?>