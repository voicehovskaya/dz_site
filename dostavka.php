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
<div id="shoes_menu">
<div id="shoes_menu2">
     <?php
     include_once("my_account.php");
     include_once("shoes_menubar.php");
     ?>   
    <div id="category">
	     <?php
		     include_once("sidebar.php");
		 ?>
        <font size="8" color="#363636" face="times new roman">
		<div id="content" class="float_r">
        <h1>Способи доставки та оплати</h1>
        <h2>Оплата</h2>
       <h2>Оплату можна здійснити одним із таких способів:<br>
	    - на карту Приват банка<br>
	    - накладений платіж при отриманні замовлення<br>
	    - при самовивозі - готівковий розрахунок або карткою через банківський термінал </h2>
       <h1>Доставка по Києву і Україні</h1>
	   <h2>Нова пошта - 45 грн.<br>
	   Ін-Тайм - 30 грн.<br>
	   Самовивіз</h2>
	   
        <div class="cleaner h20"></div>
        </div> </font>
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
    
</div> 
</div> 

</body>
</html>