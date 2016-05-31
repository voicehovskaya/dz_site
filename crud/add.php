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
	<title>Додати дані</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) 
{	
	$name = $_POST['name'];
	$middlename = $_POST['middlename'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$login = $_POST['login'];
	$password = $_POST['password'];
		
	// checking empty fields
	if(empty($name) || empty($middlename) || empty($surname) || empty($country) || empty($city) || empty($email) || empty($phone) || empty($login) || empty($password)) 
	{
				
		if(empty($name)) 
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($middlename)) 
		{
			echo "<font color='red'>Middlename field is empty.</font><br/>";
		}
		
		if(empty($surname)) 
		{
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
		
		if(empty($country)) 
		{
			echo "<font color='red'>Country field is empty.</font><br/>";
		}
		
		if(empty($city)) 
		{
			echo "<font color='red'>City field is empty.</font><br/>";
		}
		
		if(empty($email)) 
		{
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($phone)) 
		{
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($login)) 
		{
			echo "<font color='red'>Login field is empty.</font><br/>";
		}
		
		if(empty($password)) 
		{
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	else 
	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO table_db(name,middlename,surname,country,city,email,phone,login,password) VALUES ('$name','$middlename','$surname','$country','$city','$email','$phone','$login','$password')");
		
		//display success message
		echo "<font color='green'>Дані додано успішно!";
		echo "<br/><a href='index.php'>Переглянути результат</a>";
	}
}
?>
</body>
</html>