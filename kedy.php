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
        <div id="content" class="float_r">
        	<h1> Кеди </h1>        	
            <div class="product_box">
	            <h3>Wonex Код 5617</h3>
            	<a href="productdetail4.php"><img src="images/product/04.jpg" alt="Shoes 4" /></a>
                <p>Економія 80 грн. (20%)</p>
            <p class="product_price"> 340 грн.</p>
                <a href="Wonex Kod 5617.php" class="addtocart"></a>
                <a href="productdetail4.php" class="detail"></a>
            </div>        	           	      	
            <div class="product_box no_margin_right">
            	 <h3>Wonex Код 5613</h3>
            	<a href="productdetail5.php"><img src="images/product/05.jpg" alt="Shoes 5" /></a>
               <p>Стара ціна: <strike> 740 грн.</strike></p>
              <p class="product_price">595 грн.</p>
                <a href="Wonex Kod 5613.php" class="addtocart"></a>
                <a href="productdetail5.php" class="detail"></a>
            </div>  
        </div> 
        <div class="cleaner"></div>
    </div> 
    
    <?php
	include_once("footer.php");
	?>
</div> 
</div> 

</body>
</html>