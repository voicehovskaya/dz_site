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
        	<h1> Туфлі </h1>        	       	           	      	
            <div class="product_box no_margin_right">
            	 <h3>Pier Lucci Код 5706</h3>
            	<a href="productdetail3.php"><img src="images/product/03.jpg" alt="Shoes 3" /></a>
               <p>Стара ціна: <strike> 4100 грн.</strike></p>
              <p class="product_price">3280 грн.</p>
                <a href="Pier Lucci Kod 5706.php" class="addtocart"></a>
                <a href="productdetail3.php" class="detail"></a>
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