<?php
header('Content-Type: text/html; charset=utf-8'); 
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM table_db ORDER BY id DESC");
?>
<!DOCTYPE html 
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Додати дані</title>
</head>

<body>
	<a href="index.php">Домашня сторінка</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Ім'я</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Прізвище</td>
				<td><input type="text" name="surname"></td>
			</tr>
			<tr> 
				<td>По-батькові</td>
				<td><input type="text" name="middlename"></td>
			</tr>
			<tr> 
				<td>Логін</td>
				<td><input type="text" name="login"></td>
			</tr>
			<tr> 
				<td>Країна</td>
				<td><input type="text" name="country"></td>
			</tr>
			<tr> 
				<td>Місто</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Телефон</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr> 
				<td>Пароль</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Додати"></td>
			</tr>
		</table>
	</form>
</body>
</html>