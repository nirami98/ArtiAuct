<!--
	Description - For the current user to logout.
-->

<?php 
	session_start();
	///session_destroy();
	unset($_SESSION["first"]);
	header("location:index.php");
?>