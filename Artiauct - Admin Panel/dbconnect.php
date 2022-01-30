<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "artiauct";

	$conn = mysqli_connect($servername, $username, $password);

/*	if(!$conn)
	{
		die("Connection Failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br>";*/

	$db = mysqli_select_db($conn, $dbname);

/*	if($db)
	{
		echo "Database Selected <br>";
	}
	else
	{
		echo "Database Not Selected <br>";
	}*/
?>