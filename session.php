<?php 
header('Content-Type: text/html; charset=utf-8'); 
session_start();
	if (isset ($_POST['logout']))
	{
		session_destroy();
		unset($_SESSION['name']);
	}
?>