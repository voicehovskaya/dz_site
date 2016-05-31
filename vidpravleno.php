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
        <font size="10" color="#363636" face="times new roman">
		<div id="content" class="float_r">
        <h1>Ваше повідомлення буде розглянуто протягом дня.</h1> 
		<h1>Дякуємо, що допомагаєте нам стати кращими!</h1>

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