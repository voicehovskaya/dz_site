<!DOCTYPE html 
<html>
<head></head>
<body>
<div id="my_account">
    	<div id="site_title"><h1><a href="index.php">Shoes Market</a></h1></div>
        <div id="header_right">
	<?php	
		if(isset($_SESSION['name']))
		{
		echo '<p>
	         <a href="registr.php">Реєстрація</a> |</p>';
		echo "Вітаємо ".$_SESSION['name']."!".'<form method="POST" action="index.php">
		<input type="submit" name="logout" value="Вихід" />
		</form>';
	}
	else 
	{
	echo '<p><a href="registr.php">Реєстрація</a> | <a href="vhid.php">Вхід</a></p>';
	}
	?>
		</div>
        <div class="cleaner"></div>
    </div> 
	</body>
</html>
