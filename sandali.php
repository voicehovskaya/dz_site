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
        	<h1> Сандалі </h1>        	
            <div class="product_box">
	            <h3>Pier Lucci Код 5714</h3>
            	<a href="productdetail1.php"><img src="images/product/01.jpg" alt="Shoes 1" /></a>
                <p>Економія 670 грн. (20%)</p>
            <p class="product_price"> 2690 грн.</p>
                <a href="Pier Lucci Kod 5714.php" class="addtocart"></a>
                <a href="productdetail1.php" class="detail"></a>
            </div>        	           	      	
            <div class="product_box no_margin_right">
            	 <h3>Pier Lucci Код 5707</h3>
            	<a href="productdetail2.php"><img src="images/product/02.jpg" alt="Shoes 2" /></a>
               <p>Стара ціна: <strike> 4180 грн.</strike></p>
              <p class="product_price">3340 грн.</p>
                <a href="Pier Lucci Kod 5707.php" class="addtocart"></a>
                <a href="productdetail2.php" class="detail"></a>
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