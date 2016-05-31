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
$username = "root"; 
$password = ""; 
// Створюємо з'єднання 
$conn = new mysqli($servername, $username, $password);
// Перевіряємо з'єднання 
if ($conn->connect_error) 
{ 
die("Помилка з'єднання: " . $conn->connect_error); 
} 
// Створення Бази Даних 
$sql = "CREATE DATABASE my_db";
if ($conn->query($sql) === TRUE) 
{ 
echo "База Даних my_db успішно створена"; 
} else 
{ 
echo "Помилка при створенні Бази Даних my_db: " . $conn->error; 
} 
$conn->close(); 
?>
</body>
</html>