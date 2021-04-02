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
		header("location:uploadchallenge.php");
	}

	$challengename = $_GET['challengename'];
	$challengecriteria = $_GET['challengecriteria'];
	$hashtag = $_GET['hashtag'];
	$isactive = 1;

	$qry = "INSERT INTO challenge_tbl(challengename, challengecriteria, hashtag, isactive, doi, dou) values ('".$challengename."', '".$challengecriteria."', '".$hashtag."', $isactive, NOW(), NOW())";

	$qry1 = "INSERT INTO hashtag_tbl(hashtagname, isactive, doi) values ('".$hashtag."', $isactive, NOW())";


	$rs = mysqli_query($conn, $qry);
	if($rs)
	{
		header("location:viewchallenge.php");
	}
	else
	{
		header("location:uploadchallenge.php");
	}

	$rs1 = mysqli_query($conn, $qry1);
	if($rs1)
	{
		//header("location:viewchallenge.php");
	}
	else
	{
		//header("location:uploadchallenge.php");
	}


?>