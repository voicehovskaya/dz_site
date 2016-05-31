<?php
	header('Content-Type: text/html; charset=utf-8'); 
	$connect = mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('my_db');
	
	if (isset ($_POST['submit']))
	{
		$e_login = $_POST['e_login'];
		$e_password = md5($_POST['e_password']);
		$query = mysql_query("SELECT * FROM users WHERE login='$e_login'");
		$user_data=mysql_fetch_array($query);
		if ($user_data['password'] == $e_password){
			session_start();
			$_SESSION['name'] = $e_login;
		}
		else {
			echo "Невірний логін або пароль";
		}
	}
	if (isset ($_POST['logout']))
	{
		unset($_SESSION['name']);
	}
?>