<!--
	Description - For the current user to logout.
-->

<?php 
	session_start();
	session_destroy();
	header("location:index.php");
?>