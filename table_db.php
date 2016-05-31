<?php 
include_once("session.php");
?>
<!DOCTYPE html 
<head>
<?php
     include_once("head.php");
?>
</head>
<body>
<?php 
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "db";
// Створюємо з'єднання
$conn = new mysqli($servername, $name, $password, $dbname);
// Перевіряємо з'єднання 
if ($conn->connect_error) 
{ 
die("Помилка з'єднання: " . $conn->connect_error); 
} 
// sql для створення таблиці table_db
$sql = "CREATE TABLE table_db ( 
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
middlename VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL, 
date_bd INT(2) NOT NULL,
month_bd VARCHAR(30) NOT NULL,
year_bd INT(4) NOT NULL,
country VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone INT(10) NOT NULL,
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) 
{
echo "Таблиця table_db успішно створена"; 
} else 
{ 
echo "Помилка створення таблиці table_db: " . $conn->error; 
} 
$conn->close(); 
?>
</body>
</html>