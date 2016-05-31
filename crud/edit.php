<?php
header('Content-Type: text/html; charset=utf-8'); 
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	
    $id = $_POST ['id'];
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
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($middlename)) {
			echo "<font color='red'>Middle_name field is empty.</font><br/>";
		}
		
		if(empty($surname)) {
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
		
		if(empty($country)) {
			echo "<font color='red'>Country field is empty.</font><br/>";
		}
		
		if(empty($city)) {
			echo "<font color='red'>City field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($login)) {
			echo "<font color='red'>Login field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
	} 
	else {	
		//updating the table
		$result = mysql_query("UPDATE table_db SET name='$name',surname='$surname',middlename='$middlename',login='$login',country='$country',city='$city',email='$email',phone='$phone',password='$password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM table_db  WHERE id=$id");
if (!$result){
	mysql_error();
}
else{
while($res = mysql_fetch_array($result))
{
	$name = $res['name'];
	$middlename = $res['middlename'];
	$surname = $res['surname'];
	$country = $res['country'];
	$city = $res['city'];
	$email = $res['email'];
	$phone = $res['phone'];
	$login = $res['login'];
	$password = $res['password'];
}
}
?>
<!DOCTYPE html 
<html>
<head>	
	<title>Змінити дані</title>
</head>

<body>
	<a href="index.php">Домашня сторінка</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Ім'я</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>По-батькові</td>
				<td><input type="text" name="middlename" value=<?php echo $middlename;?>></td>
			</tr>
			<tr> 
				<td>Прізвище</td>
				<td><input type="text" name="surname" value=<?php echo $surname;?>></td>
			</tr>
			<tr> 
				<td>Країна</td>
				<td><input type="text" name="country" value=<?php echo $country;?>></td>
			</tr>
			<tr> 
				<td>Місто</td>
				<td><input type="text" name="city" value=<?php echo $city;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Телефон</td>
				<td><input type="text" name="phone" value=<?php echo $phone;?>></td>
			</tr>
			<tr> 
				<td>Логін</td>
				<td><input type="text" name="login" value=<?php echo $login;?>></td>
			</tr>
			<tr> 
				<td>Пароль</td>
				<td><input type="text" name="password" value=<?php echo $password;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Змінити"></td>
			</tr>
		</table>
	</form>
</body>
</html>