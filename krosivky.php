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
        	<h1> Кросівки </h1>        	       	           	      	
            <div class="product_box no_margin_right">
            	 <h3>Marco Piero Код 4925</h3>
            	<a href="productdetail6.php"><img src="images/product/06.jpg" alt="Shoes 6" /></a>
               <p>Стара ціна: <strike> 1360 грн.</strike></p>
              <p class="product_price">1090 грн.</p>
                <a href="Marco Piero Kod 4925.php" class="addtocart"></a>
                <a href="productdetail6.php" class="detail"></a>
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